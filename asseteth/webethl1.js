var Domain = window.location.hostname;
const URL = location.protocol+'//'+Domain+'/';
// const URL = 'http://localhost/bnbcrush_25_01_2023/';



const chainIdRequered = "0x38"; const chainIdName = "Bscscan Mainnet";
// const chainIdRequered = "0x61"; const chainIdName = "Bscscan testnet";




// const chainIdRequered = "0x89"; const chainIdName = "Polygon Mainnet";

// const chainIdRequered = "0x13881"; const chainIdName = "Polygon Testnet";;

function loadingButton(){
   
    document.getElementById('lgbutton').innerHTML = "<i class='fa fa-spinner fa-spin'></i>";
    document.getElementById('loginButton').disabled = true;
}

function unLoadingButton(){
    
    document.getElementById('lgbutton').innerHTML = "";
    document.getElementById('loginButton').disabled = false;
}
function connecttron() {
    // $("#loader-wrapper").show();
    getcontract();
}
account = 0;
async function getcontract() {
    loadingButton();

    if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
            account = await window.ethereum.request({ method: 'eth_requestAccounts' });
            console.log(account[0]);
            
             chainId = await ethereum.request({ method: 'eth_chainId' });
             if(chainId){
                    if (chainIdRequered == chainId) {
                    } else {
                        alert("Please use " + chainIdName);
                        console.log("notmain");
                        unLoadingButton();
                        return false;
                    }
                 
             }
            if (account) {
              

                $.ajax({
                    type: "post",
                    url: URL + "login-process.php",
                    data: {
                        mode: 1,
                        metamask: account[0]
                    },
                    success: function (data) {
                        var obj = JSON.parse(data);
                        console.log(obj);

                        if (obj.metamask == 'logout') {
                            unLoadingButton();
                            document.getElementById('message').textContent = "Please Register First!";
                        } else if (obj.metamask == 'active') {
                            unLoadingButton();
                            // document.getElementById('message').textContent = "Successfully Login!";
                            // swal("", "Success");
                            alert("login Successfully !");
                            window.location = 'mdash/index.php?u='+obj.act;
                        } else {
                            unLoadingButton();
                            document.getElementById('message').textContent = "Something went wrong, try later!";
                            location.reload();
                        }
                        unLoadingButton();
                        return false;
                    },
                    error: function (data) {
                        console.log(data);
                        alert(data);
                        location.reload();
                        return false;
                    }
                });
            } else {
                alert('Something went wrong, try later!');
                unLoadingButton();
                return false;
            }
        } catch (err) {
            unLoadingButton();
            alert('User denied account access. ' + err.message);
         
            return false;
        }
    } 
    else if (window.web3) {
        web3 = new Web3(web3.currentProvider);
        web3.eth.accounts[0];
        unLoadingButton();
        alert('exception case');
    } else {
        unLoadingButton();
        alert('No Metamask (or other Web3 Provider) installed.');
        //window.location = 'login.php';
        return false;
    }

}