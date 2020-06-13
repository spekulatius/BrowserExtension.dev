---
title: Which Login did I use last time?
date: 2020-01-01
icon: https://ph-files.imgix.net/abd662a2-90d0-41e4-a10a-ff703cccceb0
description: Keep forgetting how you signed in for websites? This browser extension remembers which social login you used last time for you.
keywords: login, sign-in, social login, extension, browser extension, firefox extension, producthunt, twitter, facebook

categories:
  - productivity
  - social media
  - single sign-on

links:
  homepage: https://whichlogin.com
  chrome: https://chrome.google.com/webstore/detail/which-login-did-i-use-las/pbnablopmmpgohgbnpelcdagpiboccbh
  firefox: https://gumroad.com/l/which-login
  productHunt: https://www.producthunt.com/posts/which-login
---

Which Login is a browser extension to remember your social logins for you. It's remembering, when you already forgot.


## Backstory - I need to fix this 😠️

Regularly when I'm coming back to sites I'm signed out again. So far pretty normal. When I want to sign in again I often struggle to remember how I signed in last time. Was it Google? Facebook? Or Twitter? 🤔️ I vaguely remember that I used one of these - but I'm not sure which one. I click on my best guess and it doesn't take long to realize: Nope, that wasn't it. I've just created a new account 🤬️

Whenever this happened I solve the problem and went back to what I actually wanted to do. I usually put it off as "I'm the only one being to unable to remember." Until the day I spotted a tweet and realized: I'm not the only one 🤯️

Should I solve this? 🤔️ Yea, let's give it a try.


## The solution 🏗️

I've decided to build a solution for it and learn how to build a browser extension along the way. The same night I started by adopting examples Mozilla provided. After a number of rewrites, it's stable and working as I hope 😊️

It's now checking the last pages accessed while you surf. If a sign-in is recognized, it adds the name of the network (Twitter, Facebook, Google or GitHub) to the page. No data is sent off from your server, ever. Everything stays in the local storage 🔐️


## Keen to get it? 😍️

Head over to [WhichLogin.com](https://whichlogin.com) or the Chrome Store link on the top right. I highly appreciate if you would check it out and give me feedback 🙏️
