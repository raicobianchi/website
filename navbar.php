<?php 

    // arrays of the links for the navigation
    $navArray = array(
        "home" => array(
            "link" => "./index.php",
            "sub1" => "#ourSolution",
            "sub2" => "#ourTech",
            "sub3" => "#ourCompany",
            "sub4" => "#ourMilestones"
        ),
        "investments" => array(
            "link" => "./investment opportunities.php", 
            "sub1" => "#easyInvest",
            "sub2" => "#realEstate"
        ),
        "investors" => array(
            "link" => "./investors.php",
            "sub1" => "?p=inv",
            "sub2" => "?p=par"
        ),
        "contacts" => array(
            "link" => "./contact.php"
        )
    );

    $appLink = "https://mvp-realty-207409.appspot.com/"
?>

<div class="mainmenu">
    <ul id="primary-menu">
    	
        <span class="dropdown">
            <li><a class="nav-link <?php if($jijos == 'index.php') {echo 'activePage'; } ?>" href="<?php echo $navArray['home']['link']?>">Swiss Realty</a></li> 
            <div class="dropdown-content">
		    	<a href="<?php echo $navArray['home']['link'] . $navArray['home']['sub1']?>">Solution</a>
		    	<a href="<?php echo $navArray['home']['link'] . $navArray['home']['sub3']?>">Company</a>
                <a href="<?php echo $navArray['home']['link'] . $navArray['home']['sub2']?>">Technology</a>
		  		<!-- <a href="<?php echo $navArray['home']['link'] . $navArray['home']['sub4']?>">Milestones</a> -->
			</div>
		</span>
		
        <li><a class="nav-link <?php if($jijos == 'investment opportunities.php') {echo 'activePage'; } ?>" href="<?php echo $navArray['investments']['link']?>">Investments</a></li> 

        <span class="dropdown">
           <li><a class="nav-link <?php if($jijos == 'investors.php') {echo 'activePage'; } ?>" href="<?php echo $navArray['investors']['link']?>">Investors & partners</a></li>
           <div class="dropdown-content">
               <a href="<?php echo $navArray['investors']['link'] . $navArray['investors']['sub1']?>">Investors</a>
                <a href="<?php echo $navArray['investors']['link'] . $navArray['investors']['sub2']?>">Partners</a>
           </div>
       </span>

        <li><a class="nav-link <?php if($jijos == 'contact.php') { echo 'activePage'; } ?>" href="<?php echo $navArray['contacts']['link']?>">Contact</a></li>

        <li><a class="appao-btn" href="<?php echo $appLink?>" target="a_blank">Start investing</a></li>
    </ul>
</div>