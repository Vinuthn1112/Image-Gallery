//selecting all required elements
const filterItem=document.querySelector(".items");
const filterImg=document.querySelectorAll(".image");
window.onload = ()=>{ //once window loaded
    filterItem.onclick=(selectedItem)=>{  //when user clicks on filterItem div
        if(selectedItem.target.classList.contains("item")){  //if user clicks on element has .item class
            filterItem.querySelector(".active").classList.remove("active");//remove the item class which is in the first element
            selectedItem.target.classList.add("active");//add that active class on the user selected element or item
            let filterName = selectedItem.target.getAttribute("data-name");//getting data-name value of the user selected item and storing in a filtername variable
            filterImg.forEach((image) => {
                
                let filterImages = image.getAttribute("data-name");
                if((filterImages == filterName) || filterName == "all")
                {
                    image.classList.remove("hide");
                    image.classList.add("show");
                }
                else
                {
                    image.classList.add("hide");
                    image.classList.remove("show");
                }
            });

            }
            
            
                
           
        }

       

    }


