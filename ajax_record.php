<div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">Timestamp</h6>
                        </th>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">Ketinggian(cm)</h6>
                        </th>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">DHT22</h6>
                        </th>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">Rain</h6>
                        </th>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">LDR</h6>
                        </th>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">Kesimpulan1</h6>
                        </th>
                        <th class="border-bottom-0"><center>
                          <h6 class="fw-semibold mb-0">Kesimpulan2</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    //Import file config
                    require 'db.php';
                          $sql = mysqli_query($koneksi, "SELECT * FROM record ORDER BY id DESC LIMIT 10" );
                      
                          if(mysqli_num_rows($sql) == 0){ 
                            echo '<tr><td colspan="14">Belum ada data.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
                          }else{ // jika terdapat entri maka tampilkan datanya
                            while($row = mysqli_fetch_assoc($sql)){
                            
                          echo '
                          <tr> 
                            <td><center>'.$row['datetime'].'</td>
                            <td><center>'.$row['us'].'</td>
                            <td><center>'.$row['dht22'].'</td> 
                            <td><center>'.$row['rain'].'</td>     
                            <td><center>'.$row['ldr'].'</td> 
                            <td><center>'.$row['kesimpulan1'].'</td> 
                            <td><center>'.$row['kesimpulan2'].'</td>                  
                          </tr>
                          ';
                              }
                            }
                          ?>                      
                    </tbody>
                  </table>
                </div>