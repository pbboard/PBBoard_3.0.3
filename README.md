# PBBoard_3.0.3
PBBoard official Forum https://www.pbboard.info/forums/
<div id="container">
	<div id="page-content">
		<div class="item">
			<h3>Welcome</h3>
			<h4>Thanks for downloading PBBoard!</h4>
			<p>These documents will guide you through the process of installing 
			PBBoard on to your web site, updating an existing copy of PBBoard 
			and provide you with a bit of legal preamble we need to include 
			within our product. A <a href="http://pbboard.info/forums/f16">
			PBBoard Tutorials</a> of PBBoard is available at the
			<a href="http://pbboard.info">PBBoard website</a>.</div>
	</div>
</div>

<div id="container">
	<div id="page-content">
		<div class="item">
			<h3>Installation Instructions</h3>
			<h4>Quick and easy steps to get you up and running</h4>
			<p>These steps are by no means exhaustive or as detailed as 
			possible. If you require more detailed installation instructions.</p>
			<ol>
				<li style="padding-bottom: 10px">Unzip the release archive to 
				your computer using an archive utility capable of decompressing 
				the download format you chose (<a href="http://www.winzip.com">WinZip</a>,
				<a href="http://www.rarsoft.com/">WinRAR</a>)</li>
				<li style="padding-bottom: 10px">Using an FTP client (<a href="http://www.flashfxp.com">FlashFXP</a>,
				<a href="http://filezilla-project.org/">FileZilla</a>,
				<a href="http://www.smartftp.com/">SmartFTP</a>), or a file 
				manager provided with your hosting package, upload the entire 
				contents of the 'Upload' directory to a visible directory on 
				your web server (for example, forum or forums).</li>
				<li style="padding-bottom: 10px">CHMOD the following files to 
				666 (ie, make sure that PHP can write to them).<br>
				./includes/settings.php<br>
				./includes/config.php (you must rename <strong>
				config.default.php</strong> to <strong>config.php</strong> 
				first)<br>
				<br>
				CHMOD the following folders to 777 (ie, make sure that PHP can 
				write to and execute from them).<br>
				./cache/*all files*<br>
				./download/*all files*<br>
				./admincp/cpstyles/templates/</li>
				<li style="padding-bottom: 10px">In your browser, visit the URL 
				where you installed your forums, appending /install/ on to the 
				end of it.<br>
				<br>
				If you installed your forums to http://www.yoursite.com/forums/ 
				then you would visit http://www.yoursite.com/forums/install/.</li>
				<li style="padding-bottom: 10px">Please follow the installation 
				wizard through, making sure you have the following details 
				handy: 
				<ul>
					<li style="padding-bottom: 10px"><strong>Database Details:</strong><br>
					PBBoard 3.0.3 can run on MySQLi, PHP7. You will need the 
					details of your database so PBBoard can connect to it. 
					Generally your web host should be able to supply you with 
					these details.
					<ul>
						<li style="padding-bottom: 10px"><strong>MySQL:</strong> 
						You need your MySQL username, password, database name 
						and the hostname or ip address of your MySQL server.</li>
					</ul>
					</li>
					<li style="padding-bottom: 10px"><strong>Forum Details:</strong><br>
					This includes the name of your forums, the URL to your 
					forums directory, the name of your website, and the URL to 
					your website.</li>
					<li style="padding-bottom: 10px"><strong>Administrator 
					Information:</strong><br>
					During the installation process you will be required to 
					create your initial administrator account. You will need to 
					know which username, password, and email address you intend 
					to use for this account</li>
				</ul>
				</li>
				<li style="padding-bottom: 10px">After the installation has 
				completed, please delete the 'install' directory from server.<br>
				Note: for extra security you can CHMOD config.php back to 644, 
				or even 444, but make sure you leave settings.php writable, as 
				well as all the other files and folders with extra permissions.</li>
				<li style="padding-bottom: 10px">You can now login to the 
				Administration Control Panel by appending /admincp/ on to the 
				URL of your forums</li>
			</ol>
			<p>Congratulations, you should now have an installed and working 
			copy of PBBoard on your web server.</div>
	</div>
</div>


<div id="container">
	<div id="header">
		<div id="utilities">
			<div id="syndication">
				<h3>PBBoard Links</h3>
				<p><a href="http://pbboard.info">PBBoard Website</a><br>
				<a href="http://pbboard.info/forums">PBBoard Community Forums</a><br>
				<a href="http://pbboard.info/forums/f16">PBBoard Tutorials</a>
			</div>
		</div>
	</div>
</div>
