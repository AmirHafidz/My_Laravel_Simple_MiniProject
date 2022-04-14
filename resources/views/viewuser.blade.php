{{View:: make('title')}}

<!-- <style>
.h-5 {
height: 1em;
}

.flex {
text-align: center;
width: 100%;
}

.leading-5{
padding: 0.7em;
}
</style> -->

    <!-- <div class="pagination"> -->
        <!-- {{ $users->links('vendor.pagination.bootstrap-4') }} -->
        <!-- {{ $users->appends(['search' => Request::get('search')])->links() }}
    </div> -->

    @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif


















<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="exportTableToExcel('tblData')">Exports</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

    



      <!-- Penting -->
      <div class="table-responsive">
        <table class="table table-striped table-sm" id="tblData">
          <thead>
            <tr>
              <th scope="col" class="headcol">#</th>
              <th scope="col" class="headcol">Fullname</th>
              <th scope="col"class="headcol">Email Address</th>
              <th scope="col"class="headcol">Password</th>
              <th scope="col"class="headcol">Created At</th>
              <th scope="col"class="headcol">Action</th>
            </tr>
          </thead>

          <tbody id="sini">
          @foreach($users as $user)
        <tr>
            <th>{{ $loop->iteration}}</th>
            <td>{{ $user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{date('D,d F Y',strtotime($user->created_at))}}
            </td>
            <td>
                <a href="/editmyuser?rid={{$user->id}}">Edit</a>
                <a href="/userdelete?rid={{$user->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    <tbody>

</table>

<!-- <div class="paginations">
    {{$users->links()}}
    
</div> -->

<!-- <div class="pagination">
        {{ $users->links('vendor.pagination.bootstrap-4') }}
        {{ $users->appends(['search' => Request::get('search')])->links()}}

</div> -->
<div class="pagination">
{{ $users->links('vendor.pagination.bootstrap-4') }}
</div>

@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif






</div>
{{View:: make('footer')}}

      </div>
    </main>
  </div>
</div>


    <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <script>

function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


  </script>
