<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - Inventory Management System </title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
	<div id="dashboardMainConatainer">
		<div class="dashboard_sidebar" id="dashboard_sidebar">
			<h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
			<div class="dashboard_sidebar_user">
				<img src="images/user/user.png" alt="User image."  id="userImage" />
				<span>User</span>
			</div>
			<div class="dashboard_sidebar_menus">
				<ul class="dashboard_menu_lists">
					<li class="menuActive">
						<a href=""><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-bullhorn"></i><span class="menuText">Campaigns</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-dollar"></i><span class="menuText">Revenue Management</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-book"></i><span class="menuText">Accounts Receivable</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-gears"></i><span class="menuText">Configuration</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-chart"></i><span class="menuText">Stats</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="dashboard_content_container" id="dashboard_content_container">
			<div class="dashboard_topNav">
				<a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
				<a href="" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
			</div>
			<div class="dashboard_content">
				<div class="dashboard_content_main"></div>
			</div>
		</div>
	</div>
<script>
	var sideBarIsOpen = true;

	toggleBtn.addEventListener( 'click', (event) => {
		event.preventDefault();
		if (sideBarIsOpen) {
			dashboard_sidebar.style.width = '10%';
			dashboardMainConatainer.style.width = '90%';
			dashboard_logo.style.fontSize = '60px';
			userImage.style.fontSize = '60px';

			menuIcons = document.getElementsByClassName('menuText');
			for(var i=0; i < menuIcons.length; i++){
				menuIcons[i].style.display = 'none';
			}

			document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
		sideBarIsOpen = false;
		}else{
			dashboard_sidebar.style.width = '20%';
			dashboard_sidebar.style.transition = '0.3s all';
			dashboardMainConatainer.style.width = '80%';
			dashboard_logo.style.fontSize = '80px';
			userImage.style.fontSize = '80px';

			menuIcons = document.getElementsByClassName('menuText');
			for(var i=0; i < menuIcons.length; i++){
				menuIcons[i].style.display = 'inline-block';
			}

			document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'normal';
			sideBarIsOpen = true;
		}
		
	});
</script>
</body>
</html>