<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management Module</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background-image:
      linear-gradient(90deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.45) 45%, rgba(0,0,0,0.15) 100%),
    url('assets/images/bg.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #f2f2f2;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  /* Header */
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    padding: 24px 40px;
  }

  .brand-name {
    font-size: 1.4rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-shadow: 0 2px 8px rgba(0,0,0,0.8);
  }

  .socials {
    display: flex;
    gap: 16px;
  }

  .socials a {
    color: #f2f2f2;
    font-size: 1.3rem;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(6px);
    border: 1px solid rgba(255,255,255,0.15);
    transition: 0.25s ease;
  }

  .socials a:hover {
    background: rgba(255,255,255,0.2);
    transform: translateY(-3px);
  }

  /* Main content area */
  main {
    flex: 1;
    display: flex;
    align-items: center;
    padding: 20px 40px 60px;
  }

  .glass-card {
    background: rgba(20, 20, 20, 0.35);
    backdrop-filter: blur(16px) saturate(140%);
    -webkit-backdrop-filter: blur(16px) saturate(140%);
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 18px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.45);
    padding: 28px 30px;
    width: 100%;
    max-width: 640px;
    margin-right: auto; /* pushes card to the left, keeps character on the right visible */
  }

  .glass-card h1 {
    font-size: 1.5rem;
    margin-bottom: 18px;
    letter-spacing: 1px;
    text-shadow: 0 2px 6px rgba(0,0,0,0.6);
  }

  .table-wrap {
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.95rem;
  }

  thead th {
    text-align: left;
    padding: 10px 12px;
    background: rgba(255,255,255,0.08);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    font-weight: 600;
    white-space: nowrap;
  }

  tbody td {
    padding: 10px 12px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }

  tbody tr:hover {
    background: rgba(255,255,255,0.06);
  }

  /* Responsive */
  @media (max-width: 900px) {
    .glass-card { max-width: 100%; margin-right: 0; }
    main { padding: 20px 20px 50px; }
    header { padding: 20px; }
  }

  @media (max-width: 500px) {
    .brand-name { font-size: 1.1rem; }
    .socials a { width: 36px; height: 36px; font-size: 1.05rem; }
    .glass-card { padding: 20px 16px; border-radius: 14px; }
    .glass-card h1 { font-size: 1.2rem; }
    thead th, tbody td { padding: 8px 8px; font-size: 0.85rem; }
  }
</style>
</head>
<body>

  <header>
    <div class="brand-name">KIER LAWRENCE IGNACIO</div>
    <div class="socials">
      <a href="https://github.com/Keydstunna" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
      <a href="https://www.facebook.com/share/1DWP6rnxw7/" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/kwonbluu?igsh=MXZ3dzRqYmRkc3hqbA==" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
    </div>
  </header>

  <main>
    <div class="glass-card">
      <h1>User Management Module</h1>
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <td><?= $user['id'] ?></td>
              <td><?= $user['firstname'] ?></td>
              <td><?= $user['lastname'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><?= $user['username'] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
</html>