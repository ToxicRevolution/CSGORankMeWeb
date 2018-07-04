# CSGORankMeWeb
Web interface for RankMe CSGO stat tracking plugin.

# Purpose
This web interface allows users to view the stats from Counter Strike Global Offensive servers running the RankMe plugin found <a href='https://forums.alliedmods.net/showthread.php?p=1456869'>Here</a> or Kento's version found <a href="https://forums.alliedmods.net/showthread.php?t=290063">Here</a>.

# Features
<ul>
<li>Sort by various stats: kills, time, headshots, points or any other tracked stat.</li>
<li>Check your personal stats from any of the servers running RankMe.</li>
<li>Check stats of any player you desire that plays on the server(s) you are looking for.</li>
</ul>

# Restrictions

The main restriction as of now is that there is only support for mySQL and not SQLite. I will possibly start development of a seperate project for converting SQLite to mySQL so that people can go down that road if they wish. I may also work on implementing support for SQLite into the current project, stay tuned!

# Installation

1. Download all files and extract files into a folder on your webserver.
2. In a browser navigate to http://yoursite.com/folderName/install/install.php.
3. Follow the install instructions by hovering over the tooltips for information about each.
4. Delete the install folder after filling in the install page.
5. The site should be up at http://yoursite.com/folderName/ feel free to add social media links and servers by logging into your admin account on the bottom left and going to the admin area.

# Releases

V1.0 - For the most part stable, runs into issues if using large datasets. Semi-slow method of rendering leaderboard. Not recommended for large communities or communities with 10,000 or more RankMe entries.

v1.1.1 - Quickest release, utilizing server sided datatables, more stressful on server but much quicker. Stable as all bugs should be addressed as far as we can find. Even with more data calls to server you should end up requesting less data from that server than you would with V1.0.

# Help and Suport

Start an Issue and Kenny or myself will reply and hopefully have a solution. 

Additionally you can add me on steam <a href="http://steamcommunity.com/id/toxicandy7474">here</a>. Please leave a comment on my profile as to why you are adding me.

Please report any errors this way as well so that I can update and fix those errors.

# Changes 6/5/2017

As of June 5th, 2017 we made a fairly large change which we encourage all users of our service to use. If you are downloading for the first time please ignore this but if you have already downloaded this web interface please do the following:

1. Download a new zip from GitHub of the source code.
2. Upload all the files onto your server and overwrite all files (as long as you haven't made any changes to the source this won't affect anything, if you have let me know and I can help).
3. Delete the install folder that was added (if you don't you leave a huge vulnerability on your site).
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

# Want updates on this project and other projects?

Check out our website, <a href="https://toxicrevolution.net">ToxicRevolution.net</a> to see our current projects and updates regarding current projects. We like to interact with other server owners and in general with the community so feel free to drop by.

# Donate!
If you feel super generous you can donate me a drink or two here:

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/AndyPetrzilka)
[![Keybase](https://img.shields.io/badge/Keybase-Group-blue.svg)](https://keybase.io/team/toxicrevolution.development)
