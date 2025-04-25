<div class="p-6 space-y-10">

  <!-- Dashboard Heading -->
  <div class="flex justify-between items-center">

  </div>

  <!-- Stats Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 shadow rounded-lg hover:shadow-md transition">
      <h2 class="text-sm text-gray-500">Total Users</h2>
      <p class="text-3xl font-bold mt-1">1,248</p>
    </div>
    <div class="bg-white p-6 shadow rounded-lg hover:shadow-md transition">
      <h2 class="text-sm text-gray-500">Monthly Revenue</h2>
      <p class="text-3xl font-bold mt-1">$23,451</p>
    </div>
    <div class="bg-white p-6 shadow rounded-lg hover:shadow-md transition">
      <h2 class="text-sm text-gray-500">Pending Tickets</h2>
      <p class="text-3xl font-bold mt-1">58</p>
    </div>
  </div>

  <!-- Recent Activity -->
  <div class="bg-white p-6 shadow rounded-lg">
    <h2 class="text-lg font-semibold mb-4">Recent Activity</h2>
    <table class="w-full text-sm text-left">
      <thead class="text-gray-500 border-b">
        <tr>
          <th class="py-2">User</th>
          <th class="py-2">Action</th>
          <th class="py-2">Date</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        <?php
        $config=require('./config.php');
        // $connection= new Database($config['database']);
        // $id= $_GET['id'];
        // // dd(item: $id);
        // $query = "SELECT Full_name FROM clients where id=:id";
        // $clients = $connection-> query($query,['id'=>$id]);
        //         dd($clients);
        //  $assistants= $connection;

        $connection= new Database($config['database']);
        $clients=$connection->get('clients');
        // dd($clients);
        ?>
      <?php foreach($clients as $client){ ?>
    <tr>
        <td><?= $client['Full_name'] ?></td>
    </tr>
    <?php } ?>
        <tr class="border-t hover:bg-gray-50">
          
        </tr>
      </tbody>
    </table>
  </div>

</div>
