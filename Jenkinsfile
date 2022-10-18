// pipeline syntax: http://jenkins.k8s/pipeline-syntax/

import groovy.json.JsonOutput

podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      serviceAccountName: jenkins-admin
      containers:
      - name: jnlp
        image: jenkins/inbound-agent:latest
      - name: k8s
        image: alpine/k8s:1.24.6
        command:
        - sleep
        args:
        - 99d        
      - name: kaniko
        image: gcr.io/kaniko-project/executor:debug
        command:
        - sleep
        args:
        - 9999999
        volumeMounts:
        - name: kaniko-secret
          mountPath: /kaniko/.docker
      restartPolicy: Never
      volumes:
      - name: kaniko-secret
        secret:
            secretName: dockerhub
            items:
            - key: .dockerconfigjson
              path: config.json
''')
{
  node(POD_LABEL) {
    // https://www.jenkins.io/doc/pipeline/tour/environment/
    withEnv ([
      'BUILD_USER='
    ])
    {
      stage('build') {
        git url: 'https://github.com/dclmict/dclm-webcast.git', branch: 'main'      
        container('kaniko') {
          stage('build webcast-app') {
            sh '''
              /kaniko/executor --context `pwd` --destination opeoniye/dclm-webcast:$BUILD_NUMBER
            '''
          }
        }
      }

      stage('deploy') {
        container('k8s') {
          stage('deploy webcast-app') {
            sh '''
              // pwd && ls
              apk add gettext
              envsubst < k8s/webcast.yml | kubectl apply -f -
              kubectl get deployments/webcast-app -n devops
              echo 'Kindly visit: http://webcast.k8s/'
            '''
          }
        }
      }

      stage('publish') {
        dir('report') {
        }
        publishHTML ([
          allowMissing: false,
          alwaysLinkToLastBuild: false,
          keepAll: true,
          reportDir: 'report',
          reportFiles: 'index.html',
          reportName: 'report',
          reportTitles: ''
        ])
      }

      stage('notify') {
        BUILD_USER = getBuildUser() //https://naiveskill.com/jenkins-pipeline-functions/
        ERROR = "${env.BUILD_URL}console"
        slackNotify()
      }
      
    }
  }
}

def getBuildUser() {
  return currentBuild.rawBuild.getCause(Cause.UserIdCause).getUserId()
}

def slackNotify()
{
 if ( currentBuild.currentResult == "SUCCESS" ) {
  buildSummary = "Job: ${env.JOB_NAME} build #${env.BUILD_NUMBER} by ${BUILD_USER}\n Status: *SUCCESS*\n Build Report: ${env.BUILD_URL}report"
  slackSend color : "good", message: "${buildSummary}", channel: '#jenkins'
 }
 else {
  buildSummary = "Job: ${env.JOB_NAME} build #${env.BUILD_NUMBER} by ${BUILD_USER}\n Status: *FAILURE*\n Error Description: ${ERROR} \nBuild Report: ${env.BUILD_URL}report"
  slackSend color : "danger", message: "${buildSummary}", channel: '#jenkins'
 }
}