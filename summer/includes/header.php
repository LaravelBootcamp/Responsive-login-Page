
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer sale</title>
    <link rel="shortcut icon" href="./images/Summer 1.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- daisy and tailwind cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body oncontext="return false">
  <!-- This is navber part start -->
  <nav class="px-10 pb-5 bg-[#F9F6E2]">
    <div class="navbar ">
      <div class="flex-1 hidden lg:inline">
        <a class=" btn cursor-pointer font-bold  normal-case text-3xl ">SUMMER SALE</a>
      </div>
      <div class="flex-none gap-2">
        <nav class="text-black p-4">
          <ul class="flex space-x-4">
              <li class="nav-item"><a href="#">Home</a></li>
              <li class="nav-item"><a href="#">About</a></li>
              <li class="nav-item"><a href="#">Services</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
          </ul>
      </nav>
        <div class="form-control">
          <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <div class="dropdown dropdown-end">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="./images/Summer 1.png" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
              <a class="justify-between">
                Profile
                <span class="badge">New</span>
              </a>
            </li>
            <li><a>Settings</a></li>
            <li><a href="../index.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- This is navber part end -->