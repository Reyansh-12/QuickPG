import "../../assets/style/header.css";
import logo from "../../assets/images/logo-removebg-preview.png";

const Header = () => {
    return (
        <>
            <div className="d-flex row justify-content-between align-items-center position-fixed header p-3 w-100 m-0">
                <div className="col-lg-3">
                    {/* <img src={logo} alt=""  style={{width: '150px',}}/> */}
                    <h3 className="text-white">PG <span className="text-warning">Hostel</span></h3>
                </div>
                <div className="col-lg-6">
                    <ul className="d-flex justify-content-center list-unstyled mb-0 gap-4"> 
                        <li className="rounded-5"><span className="p-3">Home</span></li>
                        <li className="rounded-5"><span className="p-3">Girls Hostel</span></li>
                        <li className="rounded-5"><span className="p-3">Boys Hostel</span></li>
                        <li className="rounded-5"><span className="p-3">Co-living</span></li>
                        
                    </ul>
                </div>
                <div className="col-lg-3 d-flex justify-content-end pe-5">
                    <button className="account-btn rounded-5 border-0 p-2 ps-4 pe-4">My Account</button>
                </div>
            </div>
        </>
    )
}
export default Header;