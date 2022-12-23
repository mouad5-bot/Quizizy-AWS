fetch("question.json").then(e=>console.log(e.json()))
getData();
async function getData() {
    try {
      const response = await fetch('question.json');
      const data = await response.json();
      console.log(data);
      // data is a JavaScript object now!
    } catch (error) {
      console.error(error);
    }
  }