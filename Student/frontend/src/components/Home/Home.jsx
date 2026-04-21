import "../../assets/style/home.css";
import { CgBoy, CgGirl } from "react-icons/cg";
import { IoHome, IoFastFood } from "react-icons/io5";
import { RiMoneyRupeeCircleFill } from "react-icons/ri";
import { FaWifi } from "react-icons/fa";


const Home = () => {
    return (
        <>
            <div className="hero-section">
                <div className="cont m-0 pt-5 h-100 ">
                <p className="text-center highlight rounded-2 ps-3"><span className="rounded-5"></span>INDIA'S SMARTEST PG FINDER</p>
                <h1 className="ms-5 heading text-white fw-bold">Welcome to Quick PG</h1>
                <h5 className="ms-5 sub-heading text-white fw-bold">Find your perfect PG & hostel</h5>
                <div className="d-flex justify-content-start mt-5 bg-warning p-3 rounded-2 explore-card">
                    <span className="ms-3 me-4 explore-btn rounded-2 border-0 p-2">₹0</span>
                    <div>
                        <h3>Zero Security Deposit</h3>
                        <p>Move In without paying any deposit. Just pay your first month's rent</p>
                    </div>
                </div>
                </div>
                
            </div>
            <div className="">
                <div className="card search-box shadow-lg mt-5 p-5 rounded-4">
                    <h3>Find your PG</h3>
                    <p>Search by city, locality, or landmark</p>
                    <div className="d-flex search justify-content-start rounded-3 p-2 align-items-center gap-1">
                        <input type="search" className="border border-0 p-2 bg-transparent" placeholder="e.g Koregaon Park, Pune, or Indiranagar, Bangalore" style={{width:'87%'}} />
                        <button className="btn text-black bg-warning">Search PG</button>
                    </div>
                    <div className="list">
                        <ul className="d-flex row row-cols-6 justify-content-start gap-4 mt-3">
                            <li className=""><CgBoy /> Boys PG</li>
                            <li><CgGirl />Girls PG</li>
                            <li><IoHome />Co-living</li>
                            <li><IoFastFood />With Meals</li>
                            <li><RiMoneyRupeeCircleFill />Under 8K</li>
                            <li><FaWifi />WiFi Included</li>
                        </ul>
                    </div>
                </div>
            </div>
        </>
    );
}
export default Home;