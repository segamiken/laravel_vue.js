# Politics_app
## docker(docker-compose)でLEMP環境(PHP7.3/nginx1.17/MySQL8.0/Laravel6.0)を構築し、Laravelで新規プロジェクト作成

### 環境構築の手順
[mac] Docker for Macをインストール  
https://docs.docker.com/docker-for-mac/install

**[mac]はMacのターミナル上で実行するコマンド、[appコンテナ]はappコンテナ内に入った状態で実行するコマンド**  
- [mac]git clone git@github.com:ZEROatSHIBUYA/politics_app.git  
- [mac]cd politics_app  
- [mac]cp .env-example .env
- [mac]docker-compose up -d --build  
- [mac]docker-compose exec app ash  
- [appコンテナ]composer install  
- [appコンテナ]cp .env.example .env  
- [appコンテナ]php artisan key:generate  
http://localhost:8080/ にアクセスするとトップページが見れます。  

### MySQLへの接続
[mac]docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'

### 環境構築した際の参考サイト
- https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4  
- https://qiita.com/ucan-lab/items/17c806973e69792ada99  