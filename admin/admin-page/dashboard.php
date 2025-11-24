<div class="row">

  <!-- Total Page Views -->
  <div class="col-md-6 col-xl-3">
    <a href="dashboard.php" class="text-dark text-decoration-none">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
          <h4 class="mb-3">4,42,236
            <span class="badge bg-light-primary border border-primary">
              <i class="ti ti-trending-up"></i> 59.3%
            </span>
          </h4>
          <p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year</p>
        </div>
      </div>
    </a>
  </div>

  <!-- Total Users -->
  <div class="col-md-6 col-xl-3">
    <a href="/dashboard/users" class="text-dark text-decoration-none">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
          <h4 class="mb-3">78,250
            <span class="badge bg-light-success border border-success">
              <i class="ti ti-trending-up"></i> 70.5%
            </span>
          </h4>
          <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
        </div>
      </div>
    </a>
  </div>

  <!-- Total Order -->
  <div class="col-md-6 col-xl-3">
    <a href="/dashboard/orders" class="text-dark text-decoration-none">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
          <h4 class="mb-3">18,800
            <span class="badge bg-light-warning border border-warning">
              <i class="ti ti-trending-down"></i> 27.4%
            </span>
          </h4>
          <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
        </div>
      </div>
    </a>
  </div>

  <!-- Total Sales -->
  <div class="col-md-6 col-xl-3">
    <a href="/dashboard/sales" class="text-dark text-decoration-none">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
          <h4 class="mb-3">$35,078
            <span class="badge bg-light-danger border border-danger">
              <i class="ti ti-trending-down"></i> 27.4%
            </span>
          </h4>
          <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year</p>
        </div>
      </div>
    </a>
  </div>

  <!-- Unique Visitor (charts tabs) -->
  <div class="col-md-12 col-xl-8">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="mb-0">Unique Visitor</h5>
      <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="chart-tab-month-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-month"
            type="button" role="tab" aria-controls="chart-tab-month" aria-selected="false">Month</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="chart-tab-week-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-week"
            type="button" role="tab" aria-controls="chart-tab-week" aria-selected="true">Week</button>
        </li>
      </ul>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="tab-content" id="chart-tab-content">
          <div class="tab-pane fade" id="chart-tab-month" role="tabpanel" aria-labelledby="chart-tab-month-tab" tabindex="0">
            <div id="visitor-chart-month"></div>
          </div>

          <div class="tab-pane fade show active" id="chart-tab-week" role="tabpanel" aria-labelledby="chart-tab-week-tab" tabindex="0">
            <div id="visitor-chart-week"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Income Overview -->
  <div class="col-md-12 col-xl-4">
    <h5 class="mb-3">Income Overview</h5>
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
        <h3 class="mb-3">$7,650</h3>
        <div id="income-overview-chart"></div>
      </div>
    </div>
  </div>

  <!-- Recent Orders -->
  <div class="col-md-12 col-xl-8">
    <h5 class="mb-3">Recent Orders</h5>
    <div class="card tbl-card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-borderless mb-0">
            <thead>
              <tr>
                <th>TRACKING NO.</th>
                <th>PRODUCT NAME</th>
                <th>TOTAL ORDER</th>
                <th>STATUS</th>
                <th class="text-end">TOTAL AMOUNT</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example rows: each link menuju detail order -->
              <tr>
                <td><a href="/orders/84564564" class="text-muted">84564564</a></td>
                <td>Camera Lens</td>
                <td>40</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span></td>
                <td class="text-end">$40,570</td>
              </tr>

              <tr>
                <td><a href="/orders/84564565" class="text-muted">84564565</a></td>
                <td>Laptop</td>
                <td>300</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span></td>
                <td class="text-end">$180,139</td>
              </tr>

              <tr>
                <td><a href="/orders/84564566" class="text-muted">84564566</a></td>
                <td>Mobile</td>
                <td>355</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                <td class="text-end">$180,139</td>
              </tr>

              <tr>
                <td><a href="/orders/84564567" class="text-muted">84564567</a></td>
                <td>Camera Lens</td>
                <td>40</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span></td>
                <td class="text-end">$40,570</td>
              </tr>

              <tr>
                <td><a href="/orders/84564568" class="text-muted">84564568</a></td>
                <td>Laptop</td>
                <td>300</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span></td>
                <td class="text-end">$180,139</td>
              </tr>

              <tr>
                <td><a href="/orders/84564569" class="text-muted">84564569</a></td>
                <td>Mobile</td>
                <td>355</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                <td class="text-end">$180,139</td>
              </tr>

              <tr>
                <td><a href="/orders/84564570" class="text-muted">84564570</a></td>
                <td>Camera Lens</td>
                <td>40</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span></td>
                <td class="text-end">$40,570</td>
              </tr>

              <tr>
                <td><a href="/orders/84564571" class="text-muted">84564571</a></td>
                <td>Laptop</td>
                <td>300</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span></td>
                <td class="text-end">$180,139</td>
              </tr>

              <tr>
                <td><a href="/orders/84564572" class="text-muted">84564572</a></td>
                <td>Mobile</td>
                <td>355</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                <td class="text-end">$180,139</td>
              </tr>

              <tr>
                <td><a href="/orders/84564573" class="text-muted">84564573</a></td>
                <td>Mobile</td>
                <td>355</td>
                <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                <td class="text-end">$180,139</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Analytics Report -->
  <div class="col-md-12 col-xl-4">
    <h5 class="mb-3">Analytics Report</h5>
    <div class="card">
      <div class="list-group list-group-flush">
        <a href="/reports/finance" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
          Company Finance Growth<span class="h5 mb-0">+45.14%</span>
        </a>
        <a href="/reports/expenses" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
          Company Expenses Ratio<span class="h5 mb-0">0.58%</span>
        </a>
        <a href="/reports/risk" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
          Business Risk Cases<span class="h5 mb-0">Low</span>
        </a>
      </div>

      <div class="card-body px-2">
        <div id="analytics-report-chart"></div>
      </div>
    </div>
  </div>

  <!-- Sales Report -->
  <div class="col-md-12 col-xl-8">
    <h5 class="mb-3">Sales Report</h5>
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
        <h3 class="mb-0">$7,650</h3>
        <div id="sales-report-chart"></div>
      </div>
    </div>
  </div>

  <!-- Transaction History -->
  <div class="col-md-12 col-xl-4">
    <h5 class="mb-3">Transaction History</h5>
    <div class="card">
      <div class="list-group list-group-flush">

        <a href="/transactions/002434" class="list-group-item list-group-item-action">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                <i class="ti ti-gift f-18"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Order #002434</h6>
              <p class="mb-0 text-muted">Today, 2:00 AM</p>
            </div>
            <div class="flex-shrink-0 text-end">
              <h6 class="mb-1">+ $1,430</h6>
              <p class="mb-0 text-muted">78%</p>
            </div>
          </div>
        </a>

        <a href="/transactions/984947" class="list-group-item list-group-item-action">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                <i class="ti ti-message-circle f-18"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Order #984947</h6>
              <p class="mb-0 text-muted">5 August, 1:45 PM</p>
            </div>
            <div class="flex-shrink-0 text-end">
              <h6 class="mb-1">- $302</h6>
              <p class="mb-0 text-muted">8%</p>
            </div>
          </div>
        </a>

        <a href="/transactions/988784" class="list-group-item list-group-item-action">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                <i class="ti ti-settings f-18"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Order #988784</h6>
              <p class="mb-0 text-muted">7 hours ago</p>
            </div>
            <div class="flex-shrink-0 text-end">
              <h6 class="mb-1">- $682</h6>
              <p class="mb-0 text-muted">16%</p>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>

</div>
