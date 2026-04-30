import './App.css'
import { FaIndianRupeeSign } from "react-icons/fa6";
import { HiBuildingOffice2, HiUsers } from "react-icons/hi2";
import { IoCheckmarkDoneCircle } from "react-icons/io5";

function App() {
  return (
    <div className="owner-home">
      <section className="owner-hero">
        <div className="container py-5">
          <span className="owner-chip">PG Owner Console</span>
          <h1>Welcome back, manage your properties with ease</h1>
          <p>Track occupancy, bookings, payments, and growth from one clean dashboard.</p>
        </div>
      </section>

      <section className="container py-5">
        <div className="grid stats">
          <div className="card stat-card">
            <HiBuildingOffice2 />
            <h6>Total Properties</h6>
            <h3>12</h3>
          </div>
          <div className="card stat-card">
            <HiUsers />
            <h6>Active Tenants</h6>
            <h3>286</h3>
          </div>
          <div className="card stat-card">
            <FaIndianRupeeSign />
            <h6>This Month Revenue</h6>
            <h3>2.4L</h3>
          </div>
          <div className="card stat-card">
            <IoCheckmarkDoneCircle />
            <h6>Occupancy Rate</h6>
            <h3>82%</h3>
          </div>
        </div>
      </section>

      <section className="container pb-5">
        <div className="grid panels">
          <div className="panel">
            <h4>Recent Activity</h4>
            <ul className="activity-list">
              <li><span>New booking request from Riya Sharma</span><small>5 mins ago</small></li>
              <li><span>Payment received for Lakeview Girls PG</span><small>18 mins ago</small></li>
              <li><span>Tenant support ticket closed</span><small>1 hour ago</small></li>
              <li><span>3 rooms marked available</span><small>Today, 09:40 AM</small></li>
            </ul>
          </div>
          <div className="panel">
            <h4>Quick Actions</h4>
            <div className="actions">
              <button>Add New Property</button>
              <button>Manage Rooms</button>
              <button>Verify Payments</button>
              <button>View Reports</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}

export default App
