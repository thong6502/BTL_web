<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BTL_web/app/views/admin/Login/Login1.css">
    <title>Adin login</title>
</head>
<body>
    <div class="container">
        <h1>Admin Login</h1>
        <div class="center">
        <div class="ear ear--left"></div>
        <div class="ear ear--right"></div>
        <div class="face">
            <div class="eyes">
            <div class="eye eye--left">
                <div class="glow"></div>
            </div>
            <div class="eye eye--right">
                <div class="glow"></div>
            </div>
            </div>
            <div class="nose">
            <svg width="38.161" height="22.03">
                <path d="M2.017 10.987Q-.563 7.513.157 4.754C.877 1.994 2.976.135 6.164.093 16.4-.04 22.293-.022 32.048.093c3.501.042 5.48 2.081 6.02 4.661q.54 2.579-2.051 6.233-8.612 10.979-16.664 11.043-8.053.063-17.336-11.043z" fill="#243946"></path>
            </svg>
            <div class="glow"></div>
            </div>
            <div class="mouth">
            <svg class="smile" viewBox="-2 -2 84 23" width="84" height="23">
                <path d="M0 0c3.76 9.279 9.69 18.98 26.712 19.238 17.022.258 10.72.258 28 0S75.959 9.182 79.987.161" fill="none" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"></path>
            </svg>
            <div class="mouth-hole"></div>
            <div class="tongue breath">
                <div class="tongue-top"></div>
                <div class="line"></div>
                <div class="median"></div>
            </div>
            </div>
        </div>
        <div class="hands">
            <div class="hand hand--left">
            <div class="finger">
                <div class="bone"></div>
                <div class="nail"></div>
            </div>
            <div class="finger">
                <div class="bone"></div>
                <div class="nail"></div>
            </div>
            <div class="finger">
                <div class="bone"></div>
                <div class="nail"></div>
            </div>
            </div>
            <div class="hand hand--right">
            <div class="finger">
                <div class="bone"></div>
                <div class="nail"></div>
            </div>
            <div class="finger">
                <div class="bone"></div>
                <div class="nail"></div>
            </div>
            <div class="finger">
                <div class="bone"></div>
                <div class="nail"></div>
            </div>
            </div>
        </div>
        <div class="login">
            <label>
            <div class="fa fa-phone"></div>
            <input class="username" type="text" autocomplete="on" placeholder="手机号码"/>
            </label>
            <label>
            <div class="fa fa-commenting"></div>
            <input class="password" type="password" autocomplete="off" placeholder="健谈的"/>
            <button class="password-button">显示密码</button>
            </label>
            <button class="login-button">登录</button>
        </div>
        <div class="social-buttons">
            <div class="social">
            <div class="fa fa-wechat"></div>
            </div>
            <div class="social">
            <div class="fa fa-weibo"></div>
            </div>
            <div class="social">
            <div class="fa fa-paw"></div>
            </div>
        </div>
        <div class="footer">随机文本</div>
        </div><a class="inspiration" href="https://dribbble.com/shots/4485321-Login-Page-Homepage" target="_blank" rel="noopener"><img src="https://cdn.dribbble.com/assets/logo-footer-hd-a05db77841b4b27c0bf23ec1378e97c988190dfe7d26e32e1faea7269f9e001b.png" alt="inspiration"/></a>
        </div>

        <style>
            let usernameInput = document.querySelector('.username')
let passwordInput = document.querySelector('.password')
let showPasswordButton = document.querySelector('.password-button')
let face = document.querySelector('.face')

passwordInput.addEventListener('focus', event => {
  document.querySelectorAll('.hand').forEach(hand => {
    hand.classList.add('hide')
  })
  document.querySelector('.tongue').classList.remove('breath')
})

passwordInput.addEventListener('blur', event => {
  document.querySelectorAll('.hand').forEach(hand => {
    hand.classList.remove('hide')
    hand.classList.remove('peek')
  })
  document.querySelector('.tongue').classList.add('breath')
})

usernameInput.addEventListener('focus', event => {
  let length = Math.min(usernameInput.value.length - 16, 19)
  document.querySelectorAll('.hand').forEach(hand => {
    hand.classList.remove('hide')
    hand.classList.remove('peek')
  })
  
  face.style.setProperty('--rotate-head', `${-length}deg`)
})

usernameInput.addEventListener('blur', event => {
  face.style.setProperty('--rotate-head', '0deg')
})
  
usernameInput.addEventListener('input', _.throttle(event => {
  let length = Math.min(event.target.value.length - 16, 19)
  
  face.style.setProperty('--rotate-head', `${-length}deg`)
}, 100))

showPasswordButton.addEventListener('click', event => {
  if (passwordInput.type === 'text') {
    passwordInput.type = 'password'
    document.querySelectorAll('.hand').forEach(hand => {
      hand.classList.remove('peek')
      hand.classList.add('hide')
    })
  } else {
    passwordInput.type = 'text'
    document.querySelectorAll('.hand').forEach(hand => {
      hand.classList.remove('hide')
      hand.classList.add('peek')
    })
  }
})
        </style>
</body>
</html>