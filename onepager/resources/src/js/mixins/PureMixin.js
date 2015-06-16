module.exports = {
  shouldComponentUpdate(nextProps){
    //immutable please
    //TODO: speed
    let equal = JSON.stringify(nextProps) === JSON.stringify(this.props);

    return !equal;
  },
};
