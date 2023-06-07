const form = document.querySelector('#form');

const getdata = () =>{

    const user = new FormData(form);
    const process = Object.fromEntries(user.entries());
    form.reset()
    return process;
}


const data = async() =>{

    const newdata = getdata();

    try{
        
    }
    catch{

    }
}