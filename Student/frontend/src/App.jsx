import { Routes, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import Home from "./components/Home/Home";
import GirlsHostel from "./components/GirlsHostel/GirlsHostel";
import OwnerHome from "./components/OwnerHome/OwnerHome";
import "bootstrap/dist/css/bootstrap.min.css"; 
import "bootstrap/dist/js/bootstrap.bundle.min"; 


const App = () => {
  return (
    <>
      <Header />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/girls-hostel" element={<GirlsHostel />} />
        <Route path="/owner-home" element={<OwnerHome />} />
      </Routes>
    </>
  );
}
export default App;