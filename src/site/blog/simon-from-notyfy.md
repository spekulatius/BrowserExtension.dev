---
title: Notyfy Helps You Managing Your Notifications
date: 2020-06-02
type: Interview
image: https://browserextension.dev/images/Notyfy/sharing.png
description: Notyfy is a browser extension to keep your notifications under control. In this interview Simon shares his story of the extension with us.
keywords: notification management, interview, extension development

links:
  homepage: https://notyfy.co
  chrome: https://chrome.google.com/webstore/detail/notyfy-web-notifications/jchnjaoenbpjjnfgnfhfljcdfhmpljic
  firefox: https://addons.mozilla.org/en-US/firefox/addon/notyfy/
  productHunt: https://www.producthunt.com/posts/notyfy-2
---

Notyfy is a browser extension to keep your notifications under control. In this interview Simon shares his story of the extension with us.

<!--more-->


What's your background?
-----------------------

Hey there, I'm [Simon](https://wicki.io). I'm a frontend engineer with a product mindset specializing in Hybrid App development. The past 5 years, I've worked as head of frontend at [JustWatch](https://www.justwatch.com/), a streaming search engine. I helped to build the web, Android, and iOS apps. Since then I've been working as a freelance frontend engineer, which gave me more flexibility to work on [Notyfy](https://notyfy.co).


What does your extension do?
----------------------------

Notyfy will check in the background if there are new notifications on your logged-in and selected platforms. It is optimized to keep the transferred data to a minimum because it doesn't download the whole website, big images, or load all the ads.

When a new notification appears, [Notyfy](https://browserextension.dev/directory/notyfy/) will add an unobtrusive "1" badge on the extension's icon. It will give you the relief that you haven't forgotten to follow up on things. Your aunt's birthday on Facebook? Your job inquiry message on LinkedIn? The Reddit post you made and somebody replied two days later? New comments on your ProductHunt launch? You won't miss out anymore! You are covered for this and many other cases.

![Notyfy popup window](/images/notyfy/extension.png)


Which browsers do you support?
------------------------------

Notyfy supports [Chrome](https://chrome.google.com/webstore/detail/notyfy-web-notifications/jchnjaoenbpjjnfgnfhfljcdfhmpljic), [Firefox](https://addons.mozilla.org/en-US/firefox/addon/notyfy/), and [Edge](https://microsoftedge.microsoft.com/addons/detail/gnmgkdmmejppbhfjhkknjfigflkfjijm).


What motivated you to get started?
----------------------------------

Some users may remember the chrome extension "Chime for Chrome", which I was a big fan of 5 years ago. Sadly it was abandoned and stopped working.

Notyfy wants to pick up where "Chime for Chrome" left off, while making it better and more current.


What tech stack do you use?
---------------------------

I'm using React, TypeScript and Ionic with redux. Sadly all the boilerplates were very outdated and required a lot of research. I started off with a [Vue chrome extension boilerplate](https://vue-web-extension.netlify.app/) that was missing TypeScript support and an in-sync state management (extensions have different areas of execution and need to stay in sync).


Do you plan to monetize your extension?
---------------------------------------

It's not monetized. I researched this in the beginning and even tried out placing ads in it. But by policy you can't run ads inside the popup so you'd need to open Notyfy in a new tab and inject all the information there. This quite killed the flow and I decided to let it rest and revisit it maybe at a later point.


What are some of the difficulties you've encountered in building the extension?
-------------------------------------------------------------------------------

The area that was the most difficult, but also the most rewarding, was reverse-engineering the platforms and finding the best possible way to scrape & extract notifications from there.


What have you learned through building your extension?
------------------------------------------------------

Don't lose too much time with little things but try to get the extension to a usable state and get it out there. If it's in anyone's interest, you will get feedback and this feedback is super useful, but also very motivating!


What's your favorite part about building extensions?
----------------------------------------------------

Being able to deliver and ship updates fast.


What goals do you have for the future?
--------------------------------------

Top priority is to make the usage more robust so that the extension is really owning what it's supposed to do: aggregate your notifications in one place.

Secondly, I want to widen the platforms. I'd love to have more work-related platforms included like Jira, Gitlab, Teams and more.


Where can readers go to learn more about you and your projects?
---------------------------------------------------------------

I have a portfolio site on [wicki.io](https://wicki.io) where I post my recent work and hobby projects I've been working on.
