const mainRowVal = document.getElementById("mainRow");
const subRowList = document.getElementById("subRowList");

function createMainRow() {
  if (mainRowVal.value !== "0") {
    subRowList.innerHTML = "";
    for (let i = 0; i < mainRowVal.value; i++) {
      subRowList.innerHTML += `
        <div class="form-group">
          <label>Sub Row ${i + 1}</label>
          <div class="input-group">
            <select class="custom-select" id="subRow${i + 1}">
              <option selected>Pilih salah satu</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">3</option>
              </select>
            <div class="input-group-append">
              <span class="input-group-text">Level</span>
            </div>
          </div>
        </div>
        `;
    }
  }

  if (mainRowVal.value === "0") {
    subRowList.innerHTML = "";
  }
}
