﻿<?php
include 'create.php';
include 'update.php';
include 'delete.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test CRUD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col mt-1">
                    <?=$success ?>
                    <button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-user-plus"></i></button>
                    <table class="table shadow ">
                        <thead class="thead-dark">
                            <tr>
                                <th>№</th>
                                <th>Create</th>
                                <th>Update</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($result as $value) { ?>
                                <tr>
                                    <td><?=$value['id'] ?></td>
                                    <td><?=$value['created_at'] ?></td>
                                    <td><?=$value['updated_at'] ?></td>
                                    <td><?=$value['name'] ?></td>
                                    <td><?=$value['email'] ?></td>
                                    <td><?=$value['password'] ?></td>
                                    <td>
                                        <a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>"><i class="fa fa-trash"></i></a>
                                        <?php require 'modal.php'; ?>
                                    </td>
						        </tr> <?php } ?>
					    </thead>
				    </table>
			    </div>
		    </div>
	    </div>
	    <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="Modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <h5 class="modal-title">Add user</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="" placeholder="Name">                            
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" value="" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" value="" placeholder="Password">
                            </div>
	                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                    	</form>
	            </div>
	        </div>
	    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>