<?php
$conn = mysqli_connect("localhost", "root", "", "test_ajax_php250") or die("Could not connect");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

if (mysqli_num_rows($result) > 0) {

  $output = '<table class="table table-bordered"="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Tuổi</th>
                    <th width="10%">Sửa</th>
                    <th width="10%">Xóa</th>
                </tr>';

  while ($row = mysqli_fetch_assoc($result)) {
    $output .= "<tr>
                        <td>{$row["id"]}</td>
                        <td>{$row["ten"]}</td>
                        <td>{$row["tuoi"]}</td>
                        <td>
                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal{$row["id"]}' data-whatever='@mdo'>Sửa</button>
                          <div class='modal' id='exampleModal{$row["id"]}' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title' id='exampleModalLabel'>Sửa thông tin student</h5>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                  </button>
                                </div>
                                <div class='modal-body'>
                                  <form>
                                    <div class='form-group'>
                                      <label for='recipient-name' class='col-form-label'>Tên:</label>
                                      <input type='text' class='form-control' name='ten_capnhat' id='ten_{$row["id"]}' value='{$row["ten"]}'>
                                      <input type='hidden' class='form-control' name='id_capnhat' value='{$row["id"]}'>
                                    </div>
                                    <div class='form-group'>
                                      <label for='message-text' class='col-form-label'>Tuổi:</label>
                                      <input type='text' class='form-control' name='tuoi_capnhat' id='tuoi_{$row["id"]}' value='{$row["tuoi"]}'>
                                    </div>
                                  </form>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                                  <button type='button' data-id='{$row["id"]}' class='btn btn-primary update_student'>Cập nhật</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td><button class='btn btn-primary xoa' onClick='xoa({$row["id"]})'>Xóa</button></td>
                    </tr>";
  }
  $output .= "</table>";


  echo $output;
} else {
  echo "<h2>No Record Found</h2>";
}

if (isset($_POST["ten"]) && isset($_POST["tuoi"])) {
  $ten = $_POST["ten"];
  $tuoi = $_POST["tuoi"];

  $sql_insert = "INSERT INTO students values (null, '$ten', '$tuoi')";
  $result = mysqli_query($conn, $sql_insert);
  if ($result) {
    echo "Insert successfully";
  } else {
    echo $sql_insert;
  }
}

if (isset($_POST["id"])) {

  $sql_delete = "DELETE FROM students WHERE id=" . $_POST["id"];
  $result = mysqli_query($conn, $sql_delete);
  if ($result) {
    echo "Delete successfully";
  } else {
    echo $sql_delete;
  }
}

if (isset($_POST["id_capnhat"]) && isset($_POST["ten_capnhat"]) && isset($_POST["tuoi_capnhat"])) {

  $id = $_POST["id_capnhat"];
  $ten = $_POST["ten_capnhat"];
  $tuoi = $_POST["tuoi_capnhat"];

  $sql_update = "UPDATE students SET ten='$ten', tuoi='$tuoi' WHERE id=$id";
  $result = mysqli_query($conn, $sql_update);
  if ($result) {
    echo "Delete successfully";
  } else {
    echo $sql_update;
  }
}

// live search

if (isset($_POST["input_search"])) {

  $search_value = $_POST["input_search"];

  $sql_search = "SELECT * FROM students WHERE ten LIKE '%{$search_value}%'";
  $result = mysqli_query($conn, $sql_search) or die("SQL Query Failed");

  if (mysqli_num_rows($result) > 0) {

    $output = '<table class="table table-bordered"="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Tuổi</th>
                    <th width="10%">Sửa</th>
                    <th width="10%">Xóa</th>
                </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
      $output .= "<tr>
                        <td>{$row["id"]}</td>
                        <td>{$row["ten"]}</td>
                        <td>{$row["tuoi"]}</td>
                        <td>
                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal{$row["id"]}' data-whatever='@mdo'>Sửa</button>
                          <div class='modal' id='exampleModal{$row["id"]}' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title' id='exampleModalLabel'>Sửa thông tin student</h5>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                  </button>
                                </div>
                                <div class='modal-body'>
                                  <form>
                                    <div class='form-group'>
                                      <label for='recipient-name' class='col-form-label'>Tên:</label>
                                      <input type='text' class='form-control' name='ten_capnhat' id='ten_{$row["id"]}' value='{$row["ten"]}'>
                                      <input type='hidden' class='form-control' name='id_capnhat' value='{$row["id"]}'>
                                    </div>
                                    <div class='form-group'>
                                      <label for='message-text' class='col-form-label'>Tuổi:</label>
                                      <input type='text' class='form-control' name='tuoi_capnhat' id='tuoi_{$row["id"]}' value='{$row["tuoi"]}'>
                                    </div>
                                  </form>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                                  <button type='button' data-id='{$row["id"]}' class='btn btn-primary update_student'>Cập nhật</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td><button class='btn btn-primary xoa' onClick='xoa({$row["id"]})'>Xóa</button></td>
                    </tr>";
    }
    $output .= "</table>";


    echo $output;
  } else {
    echo "<h2>No Record Found</h2>";
  }
}
