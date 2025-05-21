<?php require_once('header.php'); ?>
<main class="league-page">
  <section class="page-title-section">
    <div class="container page-title-content">
      <h2 class="page-title text-center mb-0">Squad</h2>
    </div>
  </section>
  <section class="team-section pt-4">
    <div class="container">
      <div class="row g-4">
        <div class="col-6 col-md-3 team">
          <a href="team.php">
            <img src="images/4.png" alt="Team Flag">
            <h4 class="team-name">FDF</h4>
          </a>
        </div>
        <div class="col-6 col-md-3 team">
          <a href="team.php">
            <img src="images/6.png" alt="Team Flag">
            <h4 class="team-name">Super-6</h4>
          </a>
        </div>
        <div class="col-6 col-md-3 team">
          <a href="team.php">
            <img src="images/7.png" alt="Team Flag">
            <h4 class="team-name">Friends Forever</h4>
          </a>
        </div>
        <div class="col-6 col-md-3 team">
          <a href="team.php">
            <img src="images/8.png" alt="Team Flag">
            <h4 class="team-name">Atkahon</h4>
          </a>
        </div>
        <div class="col-6 col-md-3 team">
          <a href="team.php">
            <img src="images/9.png" alt="Team Flag">
            <h4 class="team-name">Sunno-9</h4>
          </a>
        </div>
        <div class="col-6 col-md-3 team">
          <a href="team.php">
            <img src="images/10.png" alt="Team Flag">
            <h4 class="team-name">Ek-0-10</h4>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row py-5">
        <h2 class="section-title text-center pb-4">Point Table</h2>
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-striped point-table">
              <thead>
                <tr>
                  <th>Position</th>
                  <th scope="col">Team</th>
                  <th scope="col">Points</th>
                  <th scope="col">Pld</th>
                  <th scope="col">W</th>
                  <th scope="col">D</th>
                  <th scope="col">L</th>
                  <th scope="col">GF</th>
                  <th scope="col">GA</th>
                  <th scope="col">GD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>
                    <div class="d-flex table-team align-items-center gap-2">
                      <img src="images/4.png" alt="">
                      <span>FDF</span>
                    </div>
                  </td>
                  <td>73</td>
                  <td>40</td>
                  <td>20</td>
                  <td>13</td>
                  <td>7</td>
                  <td>65</td>
                  <td>40</td>
                  <td>+25</td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>
                    <div class="d-flex table-team align-items-center gap-2">
                      <img src="images/10.png" alt="">
                      <span>FDF</span>
                    </div>
                  </td>
                  <td>73</td>
                  <td>40</td>
                  <td>20</td>
                  <td>13</td>
                  <td>7</td>
                  <td>65</td>
                  <td>40</td>
                  <td>+25</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require_once('footer.php'); ?>