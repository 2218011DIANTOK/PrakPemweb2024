<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin</title>
    <link rel="stylesheet" href="../style/petisi.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head> 
  <body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
          <li>
            <a href="../admin.html">
              <i class="bx bxs-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="../narasi_gagasan/gagasan.php">
              <i class="bx bxs-objects-vertical-bottom"></i>
              <span>Pengaduhan dan Saran</span>
            </a>
          </li>
          <li >
            <a href="../narasi_gagasan/input.php">
              <i class="bx bx-notepad"></i>
              <span>Input Data</span>
            </a>
          </li>
          <li class="active">
            <a href="#">
              <i class="bx bxs-message-dots"></i>
              <span>Petisi</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bx bxs-log-out"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    <div class="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <span>jonegoro jengker</span>
          <span>Dashboard</span>
        </div>
        <div class="user-info">
          <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search" />
          </div>
        </div>
      </div>
      
      
      <div class="tabel-wrapper">
        <h3 class="main-title">Petisi</h3>
        <div class="tabel-container">
          <table>
            <thead>
              <tr>
                <th>ID Petisi</th>
                <th>ID Saran</th>
                <th>Judul</th>
                <th>Narasi Gagasan</th>
                <th>Status</th>
                <th>Action</th>
                <th>Tanggal Dibuat</th>
                <th>Terakhir Diperbarui</th>
              </tr>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>1123332</td>
                  <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi possimus quidem libero voluptatem suscipit sed nemo dolore, tempore a numquam repellendus vel quas nulla voluptatibus error, quo officia, corporis aliquam!</td>                
                  <td>
                    <span class="status status-complete">Complete</span>
                   </td>  
                  <td>
                    <div class="button-container">
                      <button class="edit-button">Edit</button>
                      <button class="remove-button">Remove</button>
                    </div>
                  <td>22/12/24</td>
                  <td>23/12/24</td>
                  </td>             
                </tr>
                <tr>
                <td>1</td>
                <td>1123332</td>
                  <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi possimus quidem libero voluptatem suscipit sed nemo dolore, tempore a numquam repellendus vel quas nulla voluptatibus error, quo officia, corporis aliquam!</td>                
                  <td>
                    <span class="status status-pending">Pending</span>
                  </td>
                  <td>
                    <div class="button-container">
                      <button class="edit-button">Edit</button>
                      <button class="remove-button">Remove</button>
                    </div>
                    <td>22/12/24</td>
                    <td>23/12/24</td>
                </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>1123332</td>
                  <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi possimus quidem libero voluptatem suscipit sed nemo dolore, tempore a numquam repellendus vel quas nulla voluptatibus error, quo officia, corporis aliquam!</td>                
                  <td>
                    <span class="status status-rejected">Rejected</span>
                  </td>
                  <td>
                    <div class="button-container">
                      <button class="edit-button">Edit</button>
                      <button class="remove-button">Remove</button>
                    </div>
                    <td>22/12/24</td>
                    <td>23/12/24</td>
                  </td>
                  
                  </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="8">Total Task : 3</td>
                </tr>
              </tfoot>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
