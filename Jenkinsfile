pipeline {
    agent any

    environment {
        buildNumber = '${env.BUILD_NUMBER}'
        imageName = 'opeoniye/dclm-webcast:$buildNumber'
        image = ''
    }
    stages {
        stage('Clone App') {
            steps {
                git branch: 'main', url: 'https://github.com/dclmict/dclm-webcast.git'
            }
        }
        stage('Build AppImage') {
            steps {
                sh 'printenv | sort'
                script {
                  image = docker.build imageName
                }
            }
        }
        stage('Push AppImage') {
          environment {
            registryCredential = 'dockerLogin'
          }
          steps{
            script {
              docker.withRegistry('https://registry.hub.docker.com', registryCredential) {
                  image.push("${buildNumber}")
                  sh 'docker rmi -f ${imageName}'
              }
            }
          }
        }
        stage('Deploying App to Kubernetes') {
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