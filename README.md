# CSGORankMeWeb
Web interface for Rank Me CSGO Stat tracking plugin

# Purpose
This web interface is to allow users to view the stats from Counter Strike Global Offensive servers running the RankMe plugin found <a href='https://forums.alliedmods.net/showthread.php?p=1456869'>Here</a> or Kento's version found <a href="https://forums.alliedmods.net/showthread.php?t=290063">Here</a>

# Features
<ul>
<li>Sort by various stats, kills, time, headshots, points or any other tracked stat.</li>
<li>Check your personal stats from any of the servers running RankMe</li>
<li>Check stats of any player you desire that plays on the server(s) you are looking for.</li>
</ul>

# Restrictions

The main restriction as of now is that there is only support for mySQL and not sqlite. I will possibly start development of a seperate project for converting sqlite to mySQL so that people can go down that road if they wish. I may also work on implementing support for sqlite into the current project, stay tuned!

# Installation


1. Download all files and extract files into a folder on your webserver.
2. In a browser navigate to http://yoursite.com/folderName/install/install.php 
3. Follow the install instructions by hovering over the tooltips for information about each
4. Delete the install folder after filling in the install page.
5. The site should be up at http://yoursite.com/folderName/ feel free to add social media links and servers by loging into your admin account on the bottom left and going to the admin area.


# Help and Suport

Start an Issue and Kenny or myself will reply and hopeful have a solution. 

Additionally you can me on steam. You can add me <a href="http://steamcommunity.com/id/toxicandy7474">Here</a> Please leave a comment on my profile as to why you are adding me.

Please report any errors this way as well so that I can update and fix those errors.

# Changes 6/5/2017

As of June 5th, 2017 we made a fairly large change which we encourage all users of our service to use. If you are downloading for the first time please ignore this but if you have already downloaded this web interface please do the following:

1. Download a new zip from github of the source code
2. Upload all the files onto your server and overwrite all files (as long as you haven't made any changes to the source this won't affect anything, if you have let me know and I can help)
3. Delete the instal folder that was added. (If you don't you leave a huge vulnerability on your site.)
4. In the config.php file which was created with the install you ran the first time add at the very buttom the line: `$table = "YOUR DATABASE'S TABLE NAME HERE";`
5. You're done! If you want you can just delete the entire old install and restart and rerun the install.php file instead of doing the above steps.

<b>What were the changes?</b> We changed the Players.class.php to a different initialization style as well as how the searchgrab, profilegrab and leaderboard grab pages retrieve information. Also cleaned up some of the functions and added support for those who don't use the default table name.

# License and Copyright

CSGO Web Rank Me's Code Is Released Under The <a href="https://github.com/ToxicRevolution/CSGORankMeWeb/blob/master/LICENSE">MIT License</a>

# Creator

<h3> Andy Petrizilka </h3>
<ul>
	<li>https://github.com/APet74</li>
	<li>https://twitter.com/AndyPetrzilka</li>
</ul>

# Helpers

<h3>Kenny Lindelof</h3>
<ul>
	<li>https://github.com/kennyLtv</li>
	<li>https://twitter.com/kennyLtv</li>
</ul>

<h3>B3none </h3>
<ul>
	<li>http://steamcommunity.com/id/b3none</li>
	<li>https://twitter.com/VoidRealityGG</li>
</ul>

# Donate!
If you feel super generous you can donate me a drink or two here d

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/AndyPetrzilka)


