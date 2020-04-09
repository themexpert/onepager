const React = require('react');
const BlockCollection = require('../../App/components/blocks/BlockCollection.jsx');

let PopupModal = React.createClass({
    
    handleClosePopup(){
        var modalElement = document.querySelector('#onepager-builder .popup-modal');
        modalElement.classList.remove('open');
    },
    render() {
        console.log("rendering popup");
        let blocks = this.props.blocks;
    
        return (
            <div className="popup-modal-wrapper">
                <div className="topbar">
                    <h2>hello popup modal</h2>
                    <button onClick={this.handleClosePopup}>close</button>
                </div>
                <div className="block-collection-wrapper">
                    <BlockCollection blocks={blocks}/>
                </div>
            </div>
        );
    }
});
module.exports = PopupModal;
