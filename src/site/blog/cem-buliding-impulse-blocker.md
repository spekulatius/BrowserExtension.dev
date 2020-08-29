---
title: Cem is building Impulse Blocker
date: 2020-08-29
type: Interview
image: https://browserextension.dev/images/Impulse-Blocker/1.png
description: Impulse Blocker helps you keeping your impulses to access websites under control.
---

Jumped into a new tab and started typing "facebook.com" once more? Impulse Blocker helps you keeping your impulses under control and drive self-discipline and productivity.

<!--more-->

What's your background?
-----------------------

I'm Cem Unalan, a software developer from Istanbul, Turkey. I have been doing web development for the last 5 years using PHP. However, I always try to keep up to date with the front end web development as well. Building side projects is a great way of doing that so I am writing quite a bit of JavaScript and CSS.


What does your extension do?
----------------------------

[Impulse Blocker](https://addons.mozilla.org/en/firefox/addon/impulse-blocker/) blocks websites that you add to your blocklist so you can no longer visit them. It generally serves the purpose of blocking some distracting websites such as social media and video platforms. I realized most of the time I'm typing "facebook.com" or "twitter.com" without even realizing it. It's like a habit or an impulse. That's where the name Impulse Blocker comes from.

![Impulse Blocker Mainscreen](/images/Impulse-Blocker/1.png)

Settings:

![Impulse Blocker Settings](/images/Impulse-Blocker/2.png)

Which browsers do you support?
------------------------------

It only supports the desktop version of Firefox.

It used to work on the Android version as well but with the recent version 79 release I don't think users can install it anymore.

What motivated you to get started?
----------------------------------

I was wanting to use Firefox as my daily browser however there were some extensions missing. One of them was this extension called [Go Fucking Work](https://chrome.google.com/webstore/detail/go-fucking-work/hibmkkpfegfiinilnlabbfnjcopdiiig).

I haven't found a great replacement for it and I knew that Firefox was going to go through an [extensions API switch with version 57](https://www.mozilla.org/en-US/firefox/57.0/releasenotes/). I thought I could pick up some users when legacy alternatives stop working. That was my main motivation.

What tech stack do you use? (Feel free to include the GitHub link here)
-----------------------------------------------------------------------

I tried to keep it very simple. It's just a React app that gets bundled up using a small webpack configuration. You can check out the source code on [GitHub](https://github.com/raicem/impulse-blocker/).

Do you plan to monetize your extension? If so, what is your strategy for this?
------------------------------------------------------------------------------

I don't have any plans to monetize it.

What are some of the challenges or limitations you've encountered in building the extension?
--------------------------------------------------------------------------------------------

Learning the WebExtensions API was challenging. The protocol for communicating between the tab/website content and browser engine is very proprietary as opposed to using HTTP and similar.

What have you learned through building your extension?
------------------------------------------------------

Distributing your code to be executed in thousands of computers is difficult. Very different from web development where your code runs on the server you own and control. Logging is non-existent, replicating the reported errors is a problem and sending a big update to all users requires a lot of good testing beforehand.

What's your favorite part about building extensions?
----------------------------------------------------

As I said distributing your code is difficult but it's very rewarding. It's a completely different mental model from what I got used to.

Also, contributing to the Firefox ecosystem was something that I'm really happy about as I believe Firefox is important for the open web.

What goals do you have for the future?
--------------------------------------

I have not been maintaining it actively for a while now. In the short term, I want to tackle some issues users report. After that, there are a couple of killer features that are highly requested. I would like to implement them and release a solid version 2.0 of the extension.

Where can readers go to learn more about you and your projects?
---------------------------------------------------------------

I do keep a blog and sometimes write about the extension here: <https://blog.cemunalan.com.tr/>

GitHub issues are also where I'm active about the extension development: <https://github.com/raicem/impulse-blocker/>
