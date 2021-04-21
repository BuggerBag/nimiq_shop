## Nimipay - Simple and Flexible Payments Gateway🎩
<img src="https://splianel.sirv.com/hero.png" width="800" alt="" /> <br>
Demo: https://nimipay.com <br>
Developer Tools: https://www.nimiq.com/developers/

Nimipay creates an overlayed UI for the interaction with the user's NIM wallet, shopping cart, and items.
It also creates a new record in the database, using the user's wallet address as the unique identifier for the user's data.

With the help of the new Nimiq Hub API, the UI allows the user to pay for invoices. Then the transaction hash is returned for the backend validation. After the transaction is confirmed, the user receives a new item. It can then be seen under the Items tab.
Being a modal window, Nimipay is shown on top of any website, and without the need to re-design the website in order to integrate a webshop.
Nimipay is all-in-one, but lightweight (~30 kb). To make it possible, some rough simplifications were made. The code is vanilla JavaScript/PHP, you can extend and customize it.

The app is experimental. Use it at your own risk.
<br>

**Front-end** `nimipay.js`
- [Reef.js](https://github.com/cferdinandi/reef) (4kb) anti-framework for reactive UI components
- [Nimiq Hub API](https://nimiq.github.io/hub/quick-start) for simple payments processing

The total Nimipay javascript bundle is ~30 kb and a few kb of CSS.
<br>

**Back-end** `nimipay.php`
- [MeekroDB](https://meekro.com/) PHP library for simple and secure MySQL queries

For the database structure, use `nimipay.sql`
<br>

**Quickstart and examples**
See https://nimipay.com
<br>

**Issues**
Report issues in [issue tracker](https://github.com/giekaton/nimipay/issues).
<br>

**Contribution**
Feel free to make a pull request or suggest ideas.
<br>
________________________
#### BigThank's to https://github.com/giekaton 
#### 🎩How to Setup on localhost (you can pass it to real webserver too!)🎩
1) install XAMP Local Server <br>
2) Clone & Copy all to htcdoc dir <br>
3) Goto http://localhost/phpmyadmin and Create new database, name it "nimipy", change charset to "latin1_bin" <br>
4) run "nimipy.sql" code, click Go <br>
5) Goto "meekrodb.2.3.class.php" (we have 2 line as "// initial connection" find both & getting setup. <br>
6) Goto "nimipay_auth.php" (Set DB info/Address/APIKey) <br>
7) Goto http://localhost/ & See the Magic!

#### @Buy webhost/then setup/then Go.
#### 🍩 NIMIQ Blockchain support BTC too.
#### 🎩In future we tell you, How to Obfuscate Webpage that can be run on server but anyone can't know what happen to it!
<img src="https://splianel.sirv.com/nimiq-payment.gif" width="300" />

