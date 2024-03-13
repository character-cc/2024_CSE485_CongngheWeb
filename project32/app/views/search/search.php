<form action="./index.php?controller=search&action=search" method="post">
    <div class="input-group mb-1">
        <input id="search-input" type="search" id="form1" class="form-control" name="search" required placeholder="Search..." aria-label="Search" />
        <button id="search-button" type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <div class="form-check form-check-inline p-0">
        <label for="contact-email" class="form-check-label"> Tìm Kiếm theo:</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" id="contact-email" name="contact" value="Email" class="form-check-input" checked>
        <label for="contact-email" class="form-check-label"> Email</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" id="contact-fullname" name="contact" value="FullName" class="form-check-input">
        <label for="contact-fullname" class="form-check-label"> Full Name</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" id="contact-department" name="contact" value="DepartmentName" class="form-check-input">
        <label for="contact-department" class="form-check-label"> Department Name</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" id="contact-position" name="contact" value="Position" class="form-check-input">
        <label for="contact-position" class="form-check-label"> Position</label>
    </div>
</form>
