podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      containers:
      - name: jnlp
        image: jenkins/inbound-agent:latest
      - name: kaniko
        image: gcr.io/kaniko-project/executor:debug
        volumeMounts:
        - name: kaniko-secret
          mountPath: /kaniko/.docker
      restartPolicy: Never
      volumes:
      - name: kaniko-secret
        secret:
            secretName: dockerId
            items:
            - key: .dockerconfigjson
              path: config.json
''') {
  node(POD_LABEL) {
    stage('Jnlp') {
      git url: 'https://github.com/dclmict/dclm-webcast.git', branch: 'main'
      container('jnlp') {
        stage('echo test') {
          sh '''
          echo pwd
          '''
        }
      }
    }

    stage('Kaniko') {
      container('kaniko') {
        stage('build webcast-app') {
          sh '''
            /kaniko/executor --context `pwd` --destination opeoniye/dclm-webcast + ":$BUILD_NUMBER"
          '''
        }
      }
    }

  }
}