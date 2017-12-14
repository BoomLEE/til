# Ansible Best Practices

## Best Practices
```
.
├── common_playbook/               # サービス全ての共用の playbook
│   ├── vars/                      # サービス全ての共用の変数
│   │   └── common.yml
│   └── roles/                     # サービス全ての共用のroles
│       ├── common/
│       │   ├── tasks/
│       │   │   └── main.yml
│       │   ├── handlers/
│       │   │   └── main.yml
│       │   ├── templates/
│       │   │   ├── ...
│       │   │   └── ...
│       │   ├── files/
│       │   │   ├── ...
│       │   │   └── ...
│       │   └── defaults/
│       │      └── main.yml
│       ├── role1/
│       │   :
│       ├── role2/
│       │   :
│       └── ...
├── service1/
│   ├── Vagrantfile
│   └── playbook
│       ├── hosts/
│       │   ├── development        # デベロップメント環境用サーバのインベントリファイル
│       │   ├── local              # ローカル環境用サーバ ( vagrant ) のインベントリファイル
│       │   ├── production         # プロダクション環境サーバ用のインベントリファイル
│       │   ├── staging            # ステージング環境サーバ用のインベントリファイル
│       │   └── test               # テスト環境サーバ用のインベントリファイル
│       ├── group_vars/
│       │   ├── all.yml             # service1 に所属するグループ全てへの変数割り当て
│       │   ├── development/       # development に所属するグループをまとめたディレクトリ
│       │   │   ├── all.yml        # development に所属するグループ全てへの変数割り当て
│       │   │   ├── group1.yml     # development に所属する group1 のみへの変数割り当て
│       │   │   ├── group2.yml     # ""
│       │   │   └── ...
│       │   ├── local/             # local に所属するグループをまとめたディレクトリ
│       │   │   :
│       │   ├── production/        # production に所属するグループをまとめたディレクトリ
│       │   │   :
│       │   ├── staging/           # staging に所属するグループをまとめたディレクトリ
│       │   │   :
│       │   └── test/              # test に所属するグループをまとめたディレクトリ
│       ├── host_vars/
│       │  ├── hostname1.yml       # システムの特定の変数が必要な場合
│       │  ├── hostname2.yml
│       │  └── ...
│       ├── site.yml               # マスター playbook
│       ├── webservers.yml         # webserver 層の playbook
│       ├── dbservers.yml          # dbserver 層の playbook
│       ├── ...
│       └── roles/                 # service1 の roles
│           ├── common/
│           │   ├── tasks/
│           │   │   └── main.yml
│           │   ├── handlers/
│           │   │   └── main.yml
│           │   ├── templates/
│           │   │   ├── ...
│           │   │   └── ...
│           │   ├── files/
│           │   │   ├── ...
│           │   │   └── ...
│           │   ├── vars/
│           │   │   └── main.yml
│           │   ├── defaults/
│           │   │   └── main.yml
│           │   └── meta/
│           ├── role1/
│           │   :
│           ├── role2/
│           │   :
│           └── ...
├── service2/
│   :
└── ...
```

## See Also
