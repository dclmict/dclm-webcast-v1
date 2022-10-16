podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      containers:
      - name: jnlp
        image: jenkins/inbound-agent:latest
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
'''){
  node(POD_LABEL) {
    stage('build') {
      git url: 'https://github.com/dclmict/dclm-webcast.git', branch: 'main'
      container('kaniko') {
        sh '''
          /kaniko/executor --context `pwd` --destination opeoniye/dclm-webcast:$BUILD_NUMBER
        '''
      }
    }

    stage('deploy') {
      container('jnlp') {
        steps {
          dir('k8s'){
            script {
              kubernetesDeploy(enableConfigSubstitution: true, configs: "webcast.yaml", kubeconfigId: "kubernetes")
            }
          }
        }
      }
    }
  }

}