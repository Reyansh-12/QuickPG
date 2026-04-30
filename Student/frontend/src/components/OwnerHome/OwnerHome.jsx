import "../../assets/style/ownerHome.css";
import { FaIndianRupeeSign } from "react-icons/fa6";
import { HiBuildingOffice2, HiUsers } from "react-icons/hi2";
import { IoCheckmarkDoneCircle } from "react-icons/io5";

const OwnerHome = () => {
    return (
        <div className="owner-home">
            <section className="owner-hero">
                <div className="container py-5">
                    <span className="owner-chip">PG Owner Console</span>
                    <h1>Welcome back, manage your properties with ease</h1>
                    <p>Track occupancy, bookings, and earnings from one clean dashboard.</p>
                </div>
            </section>

            <section className="container py-5">
                <div className="row g-4">
                    <div className="col-md-6 col-xl-3">
                        <div className="owner-stat-card">
                            <HiBuildingOffice2 />
                            <h6>Total Properties</h6>
                            <h3>12</h3>
                        </div>
                    </div>
                    <div className="col-md-6 col-xl-3">
                        <div className="owner-stat-card">
                            <HiUsers />
                            <h6>Active Tenants</h6>
                            <h3>286</h3>
                        </div>
                    </div>
                    <div className="col-md-6 col-xl-3">
                        <div className="owner-stat-card">
                            <FaIndianRupeeSign />
                            <h6>This Month Revenue</h6>
                            <h3>2.4L</h3>
                        </div>
                    </div>
                    <div className="col-md-6 col-xl-3">
                        <div className="owner-stat-card">
                            <IoCheckmarkDoneCircle />
                            <h6>Occupancy Rate</h6>
                            <h3>82%</h3>
                        </div>
                    </div>
                </div>
            </section>

            <section className="container pb-5">
                <div className="row g-4">
                    <div className="col-lg-7">
                        <div className="owner-panel h-100">
                            <h4>Recent Bookings</h4>
                            <ul className="owner-list">
                                <li><span>Shruti Jain booked Deluxe Room</span><small>2 mins ago</small></li>
                                <li><span>Riya Nair paid monthly rent</span><small>16 mins ago</small></li>
                                <li><span>New visit request for Queens PG</span><small>42 mins ago</small></li>
                                <li><span>3 beds updated as available</span><small>Today, 09:40 AM</small></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-5">
                        <div className="owner-panel h-100">
                            <h4>Quick Actions</h4>
                            <div className="d-grid gap-2 mt-3">
                                <button className="btn btn-warning fw-semibold">Add New Property</button>
                                <button className="btn btn-outline-light">Manage Rooms</button>
                                <button className="btn btn-outline-light">Verify Payments</button>
                                <button className="btn btn-outline-light">View Reports</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default OwnerHome;
