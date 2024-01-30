## Morse Code Encode & Decode

### Demo
<img src="https://media.giphy.com/media/YWdEYd3oSpyQ6DuvxE/giphy.gif" width="480" height="250" title="https://github.com/duyanhdinh/text2morse/blob/master/public/demo.gif" />

[Full HD Demo](https://github.com/duyanhdinh/text2morse/blob/master/public/demo.gif)

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
