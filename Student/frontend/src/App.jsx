import { Routes, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import Home from "./components/Home/Home";
import "bootstrap/dist/css/bootstrap.min.css"; 
import "bootstrap/dist/js/bootstrap.bundle.min"; 


const App = () => {
  return (
    <>
      <Header />
      <Home />
      {/* <Routes>
          <Route></Route>
          <Route></Route>
          <Route></Route>
          <Route></Route>
      </Routes> */}
    </>
  );
}
export default App;