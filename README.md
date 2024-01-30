## Morse Code Encode & Decode

### Demo
![demo gif](https://github.com/duyanhdinh/text2morse/tree/master/public/demo.gif)

### Install

#### Make env file
```
cp .env.xample .env
```

#### Run container

- Install docker
- Run command:
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
sail up
```

#### Migrate database
```
sail artisan migrate
```

#### Run npm
```
sail npm run dev
```

#### Access app by host: `http://localhost`
