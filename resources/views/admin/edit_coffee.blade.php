<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit Coffee Entry</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 10px;
    }

    .form-container {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 360px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 20px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      font-size: 14px;
    }

    input[type="text"] {
      width: 100%;
      padding: 7px;
      margin-bottom: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 13px;
    }

    button {
      width: 100%;
      padding: 9px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    button:hover {
      background-color: #2980b9;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 12px;
      text-decoration: none;
      color: #3498db;
      font-size: 13px;
    }
  </style>

</head>

<body>
  <div class="form-container">
    <h1>Edit Coffee Entry</h1>
    <form>
      <label>Image URL</label>
      <input type="text" name="image" value="https://via.placeholder.com/50">

      <label>Name</label>
      <input type="text" name="name" value="Arabica Dark Roast">

      <label>Short Description</label>
      <input type="text" name="description" value="Strong flavor, rich aroma">

      <label>Origin Country</label>
      <input type="text" name="country" value="Colombia">

      <label>Processing Methods</label>
      <input type="text" name="process" value="Washed">

      <label>Roast Level</label>
      <input type="text" name="roast" value="Dark">

      <label>Price</label>
      <input type="text" name="price" value="$12.50">

      <button type="submit">Save Changes</button>
    </form>
    <a class="back-link" href="{{route ('admin.dashboard')}}">← Back to Dashboard</a>
  </div>
</body>

</html>