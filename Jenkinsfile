podTemplate(yaml: '''
    apiVersion: v1
    kind: Pod
    spec:
      containers:
      - name: maven
        image: maven:3.8.1-jdk-8
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