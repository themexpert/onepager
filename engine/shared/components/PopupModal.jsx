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
                    <div className="logo"><b>Onepager</b></div>
                    <div className="tab">
                        <ul>
                            <li>Blocks</li>
                            <li>Pages</li>
                            <li>My Templates</li>
                        </ul>
                    </div>
                    <div className="right">
                        <button onClick={this.handleClosePopup}>close</button>
                    </div>
                </div>
                <div className="block-collection-wrapper">
                    <BlockCollection blocks={blocks}/>
                    <div className="bottom-bar">
                        <h4>We are developing more blocks. Stay tuned.</h4>
                    </div>
                </div>
            </div>
        );
    }
});
module.exports = PopupModal;
