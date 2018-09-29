<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/28/2018
 * Time: 1:35 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Admins | Admin</title>

    <?php include 'header-tags.php'?>
</head>
<body>
<?php include 'header.php'?>
<?php include 'side-menu.php'?>

<!--Body-->
<div class="container">
    <div class="row">
        <!--<br>
        <div class="col-md-3">
            <input class="uk-input" name="userName" type="text" placeholder="Username">
        </div>

        <div class="col-md-3">
            <input class="uk-input" name="name" type="text" placeholder="Name">
        </div>

        <div class="col-md-3">
            <input class="uk-input" name="telephone" type="text" placeholder="Telephone">
        </div>

        <div class="col-md-3">
            <div class="js-upload" uk-form-custom>
                <input type="file" multiple>
                <button class="uk-button uk-button-primary" type="button" tabindex="-1">Select</button>
            </div>
        </div>-->

        <br>

        <div style="margin: 0 auto; max-width: 100%;">
            <div class="col-sm-2">
                <button class="uk-button uk-button-primary" type="button" uk-toggle="target: #modal-add-admin"> New Admin </button>
            </div>
            <div class="col-sm-1" style="width: 1px"></div>

            <div class="col-sm-1">
                <button class="uk-button uk-button-primary" type="button">Search</button>
            </div>
            <div class="col-sm-1" style="width: 1px"></div>

            <div class="col-sm-1">
                <button class="uk-button uk-button-primary" type="button">Update</button>
            </div>
            <div class="col-sm-1" style="width: 1px"></div>

            <div class="col-sm-1">
                <button class="uk-button uk-button-danger" type="button">Delete</button>
            </div>

            <!--Add Admin Modal-->
            <div id="modal-add-admin" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h2 class="uk-modal-title">Add new Admin</h2>

                    <input class="uk-input" name="name" type="text" placeholder="Name">
                    <div style="width: 100%; height: 4px;"></div>

                    <input class="uk-input" name="email" type="text" placeholder="Email">
                    <div style="width: 100%; height: 4px;"></div>

                    <input id="txtAdminPassword" class="uk-input" name="password" type="password" placeholder="Password">
                    <div style="width: 100%; height: 4px;"></div>

                    <input id="txtAdminPasswordRe" class="uk-input" type="password" placeholder="Re type Password">
                    <div style="width: 100%; height: 4px;"></div>

                    <h4>Profile Picture : </h4>
                    <div class="js-upload" uk-form-custom>
                        <input id="inputImage" type="file" name="profilePicture" multiple>
                        <button class="uk-button uk-button-primary" type="button" tabindex="-1">Choose</button>
                    </div>

                    <div class="uk-modal-footer uk-text-right">
                        <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
                        <button id="btnAddAdmin" class="uk-button uk-button-primary" type="submit">Save</button>
                    </div>
                </div>

            </div>
            <!--End Admin modal-->
        </div>
    </div>

    <div style="width: 100%; height: 30px"></div>

    <!--Table-->
    <div class="uk-overflow-auto">
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink">Image</th>
                <th class="uk-table-shrink">Email</th>
                <th class="uk-table-shrink">Name</th>
                <th class="uk-width-small"></th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <label>
                        <input class="uk-checkbox" type="checkbox">
                    </label>
                </td>
                <td>
                    <img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt="">
                </td>
                <td>
                    admin@rent18.tk
                </td>
                <td>
                    Chamod Shehanka
                </td>
                <td>
                    <button class="uk-button uk-button-secondary" type="button">Manage</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--End Table-->
</div>


<div style="width: 100%;height: 300px"></div>
<br>
<!--End Body-->

<?php include 'footer.php'?>
<?php include 'controller/setUserDetails.php';?>
</body>
</html>