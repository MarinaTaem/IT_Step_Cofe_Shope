<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Coffee Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      padding: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
    }

    th,
    td {
      padding: 15px;
      text-align: left;
      border: 1px solid #ddd;
      vertical-align: top;
    }

    th {
      background-color: #f9fafb;
    }

    .action-buttons {
      display: flex;
      gap: 6px;
      flex-wrap: nowrap;
    }

    .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      font-size: 14px;
      text-decoration: none;
    }

    .btn-create {
      background-color: #3498db;
    }

    .btn-edit {
      background-color: #27ae60;
    }

    .btn-delete {
      background-color: #c0392b;
    }

    a.image-link {
      color: #3498db;
      text-decoration: none;
      word-break: break-all;
    }

    a.image-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <h1>Admin Dashboard - Coffee Products</h1>

  <table>
    <thead>
      <tr>
        <th>Image Link</th>
        <th>Name</th>
        <th>Short Description</th>
        <th>Origin Country</th>
        <th>Processing Methods</th>
        <th>Roast Level</th>
        <th>Price per Pound</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($coffees as $coffee)
      <tr>
        <td>
          <a href="{{ $coffee->url_image }}" target="_blank">
            {{ $coffee->url_image }}
          </a>
        </td>
        <td>{{ $coffee->name }}</td>
        <td>{{ $coffee->detail->short_description ?? 'N/A' }}</td>
        <td>{{ $coffee->detail->origin_country ?? 'N/A' }}</td>
        <td>{{ $coffee->detail->processing_methods ?? 'N/A' }}</td>
        <td>{{ $coffee->detail->roast_level ?? 'N/A' }}</td>
        <td>${{ number_format($coffee->detail->pricing_per_pound ?? 0, 2) }}</td>
        <td>
          <a href="{{ route('dashboard.edit', $coffee->id) }}" class="btn-edit">Edit</a>

          <form action="{{ route('dashboard.destroy', $coffee->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete"
              onclick="return confirm('Are you sure you want to delete this coffee?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>