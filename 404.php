<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>404 - Page Not Found</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #f6f8fc, #e9efff);
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #333;
    }

    .container {
      max-width: 500px;
      padding: 2rem;
    }

    h1 {
      font-size: 6rem;
      color: #4e6eff;
      margin-bottom: 1rem;
    }

    p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
      color: #666;
    }

    a.button {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background-color: #4e6eff;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: background 0.3s;
    }

    a.button:hover {
      background-color: #3b57e3;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 4rem;
      }

      p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <p>Oops! The page you're looking for doesn't exist.</p>
  </div>
</body>
</html>
