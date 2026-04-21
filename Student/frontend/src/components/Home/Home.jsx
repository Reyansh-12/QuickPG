import "../../assets/style/home.css";

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
                <div className="card shadow-lg me-5 ms-5" style={{marginTop: '-60px'}}>
                    <div className="card-body d-flex justify-content-center align-items-center gap-5">
                        <div className="d-flex flex-column justify-content-center align-items-center">
                            <input type="search" />
                        </div>
                        <div className="d-flex flex-column justify-content-center align-items-center">
                            
                        </div>
                        <div className="d-flex flex-column justify-content-center align-items-center">
                            
                        </div>
                    </div>
                </div>
                <h1>Reyansh</h1>
            </div>
        </>
    );
}
export default Home;