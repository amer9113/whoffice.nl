<div class="side w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left w3-red w3-text-white w3-card-4 w3-large w3-left" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
    <div class="pad w3-container w3-bottombar w3-border-white w3-hover-border-red w3-center">
        <img src="https://img.icons8.com/color/48/000000/businessman.png" id="sideicon">
        <br>
        <labelfor name="admin_name" id="adminname"><?= $this->acc_name; ?></labelfor>
    </div>
    <a class="pad w3-bar-item w3-button" href="<?= base_url().'admin/view_pages_texts'; ?>">Text Editer</a>
	<a class="pad w3-bar-item w3-button" href="<?= base_url().'admin/check_students_pending_cards'; ?>">Students Check</a>
	<!-- <a class="pad w3-bar-item w3-button" href="<?= base_url().'admin/check_students_times'; ?>">Students Times</a> -->
	<a class="pad w3-bar-item w3-button" href="<?= base_url().'admin/check_students_informations'; ?>">Students Informations</a>
    <a class="pad w3-bar-item w3-button" href="<?= base_url().'admin/check_students_statistics'; ?>">Students Statistics</a>
	<a class="pad w3-bar-item w3-button" href="<?= base_url().'admin/logout'; ?>">Logout</a>
</div>