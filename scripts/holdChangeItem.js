class PressAndHold{
    /**
     * 
     * @param {EventTarget} target the HTML element to apply events to
     * @param {Function} callback function to run once the target is pressed and held
     */
    constructor(target, callback){
        this.target = target;
        this.callback = callback;
        this.isHeld = false;
        this.activeHoldTimeoutId = null;

        ["mousedown", "touchstart"].forEach(type => {
            this.target.addEventListener(type, this._onHoldStart.bind(this));
        });

        ["mouseup", "mouseleave", "mouseout", "touchend", "touchcancel"].forEach(type => {
            this.target.addEventListener(type, this._onHoldEnd.bind(this));
        });
    }

    _onHoldStart() {
        this.isHeld = true;

        this.activeHoldTimeoutId = setTimeout(() => {
            if (this.isHeld) {
                this.callback();
            }
        }, 3000); /** for 3000ms or 3 seconds */
    }

    _onHoldEnd() {
        this.isHeld = false;
        clearTimeout(this.activeHoldTimeoutId);
    }
}

const holdButtonChangeItem = document.getElementById("holdButtonChangeItem");

new PressAndHold(holdButtonChangeItem, () => {
    window.location.href = 'change-your-item.html';
})