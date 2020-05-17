const React = require('react');
const _ = require('underscore');
const Alert = require('react-bootstrap/lib/Alert');
const Button = require('react-bootstrap/lib/Button');
const PureMixin = require('react/lib/ReactComponentWithPureRenderMixin');
const Template = require('./Template.jsx');
const Select = require("../../../shared/components/form/Select.jsx");
// const AppStore  = require('../../stores/AppStore');


let ImportTemplate = React.createClass({
    getInitialState(){
        return {
            selectedFileData: null,
        };
    },
    mixins: [PureMixin],

    handleTemplateImport(event){
        // // debugger;
        // console.log(event.target.value);
        // console.log(event.target.files);
        // // console.log('parse', JSON.parse(event.target.value));
        // console.log('files', files);
        // const data = new FormData();
        // data.append('file', files[0]);
        // data.append('upload_preset', 'badass');
        // console.log('data', data);


        const files = event.target.files[0];
        this.fileReader = new FileReader();
        this.fileReader.readAsText(files);
        var jsonData = '';
        this.fileReader.onload = event => {
            jsonData = JSON.parse(event.target.result);
            this.setState({ selectedFileData: JSON.parse(event.target.result) });
            console.log('jsondata', jsonData);
        };
        console.log('data', this.state.selectedFileData);

        // var myObject = JSON.parse(event.target.files[0].name);

        // const reader = new FileReader();
        // reader.onload = function(e){
        //     debugger;
        //     const result = JSON.parse(e.target.result);
        //     console.log(result);
        // };
        // reader.readAsText(event.target.files[0]);
        // console.log(reader.result);
        // console.log(JSON.parse(reader.result));

        // this.setState({
        //     selectedFileData: event.target.files[0],
        // })
    },
    handleImportFormSubmit(e){
        e.preventDefault();
    },
    render() {
        console.log("importing template");
        console.log('state', this.state);

        return (
            <div>
                <div className="js-upload" uk-form-custom>
                    <form onSubmit={this.handleImportFormSubmit}>
                        <input type="file" name="choose-template-json" id="choose-template-json" accept="application/json" onChange={this.handleTemplateImport} />

                        <button type="submit" className="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
                    </form>
                </div>
            </div>
        );

    }
});

module.exports = ImportTemplate;
