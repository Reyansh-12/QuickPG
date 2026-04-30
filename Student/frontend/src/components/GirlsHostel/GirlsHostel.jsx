import "../../assets/style/girlsHostel.css";
import { FaLocationDot, FaStar } from "react-icons/fa6";
import { IoShieldCheckmark } from "react-icons/io5";
import { LuBedDouble } from "react-icons/lu";

const girlsHostels = [
    {
        name: "Sakura Girls Residency",
        location: "Koregaon Park, Pune",
        price: "₹8,200 / month",
        rating: "4.7",
        features: ["CCTV Security", "Attached Bath", "Meals Included", "WiFi"]
    },
    {
        name: "Urban Nest Girls PG",
        location: "Indiranagar, Bengaluru",
        price: "₹9,000 / month",
        rating: "4.6",
        features: ["24x7 Warden", "Laundry", "Study Area", "Power Backup"]
    },
    {
        name: "Blossom Stay For Women",
        location: "Baner, Pune",
        price: "₹7,400 / month",
        rating: "4.5",
        features: ["Biometric Entry", "AC Rooms", "Housekeeping", "Hot Water"]
    }
];

const GirlsHostel = () => {
    return (
        <div className="girls-page">
            <section className="girls-hero">
                <div className="container py-5">
                    <span className="girls-chip">Safe & Verified Girls Hostels</span>
                    <h1>Find a secure and stylish girls hostel near you</h1>
                    <p>
                        Explore premium girls-only hostels with verified listings, modern facilities,
                        and zero brokerage.
                    </p>
                </div>
            </section>

            <section className="container py-5">
                <div className="girls-highlights row g-3">
                    <div className="col-md-4">
                        <div className="girls-highlight-card">
                            <IoShieldCheckmark />
                            <h5>Safety First</h5>
                            <p>CCTV, secure access, and dedicated women wardens.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="girls-highlight-card">
                            <LuBedDouble />
                            <h5>Comfortable Rooms</h5>
                            <p>Single, double, and triple occupancy with modern interiors.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="girls-highlight-card">
                            <FaStar />
                            <h5>Top Rated Stays</h5>
                            <p>Highly rated stays trusted by students and professionals.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section className="container pb-5">
                <div className="row g-4">
                    {girlsHostels.map((hostel) => (
                        <div className="col-lg-4 col-md-6" key={hostel.name}>
                            <article className="girls-hostel-card h-100">
                                <div className="girls-badge">Girls Only</div>
                                <h4>{hostel.name}</h4>
                                <p className="girls-location">
                                    <FaLocationDot /> {hostel.location}
                                </p>
                                <p className="girls-price">{hostel.price}</p>
                                <ul>
                                    {hostel.features.map((feature) => (
                                        <li key={feature}>{feature}</li>
                                    ))}
                                </ul>
                                <div className="d-flex justify-content-between align-items-center mt-3">
                                    <span className="girls-rating"><FaStar /> {hostel.rating}</span>
                                    <button className="btn btn-warning btn-sm fw-semibold">View Details</button>
                                </div>
                            </article>
                        </div>
                    ))}
                </div>
            </section>
        </div>
    );
};

export default GirlsHostel;
