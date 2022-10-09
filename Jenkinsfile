pipeline {
    agent any

    environment {
        imageName = "opeoniye/dclm-webcast"
        image = ""
    }
    stages {
        stage('Clone App') {
            steps {
                git branch: 'main', url: 'https://github.com/dclmict/dclm-webcast.git'
            }
        }
        stage('Build AppImage') {
            steps {
                echo "Running build ${env.BUILD_NUMBER}"
                sh 'printenv | sort'
                script {
                  image = docker.build imageName:${env.BUILD_NUMBER}
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