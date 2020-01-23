export default class Gate{

    constructor(user){
        this.user = user;
    }

    isAdmin(){
        return this.user.type === 'admin'
    }

    isPublisher(){
        return this.user.type === 'publisher'
    }

    isAdvertiser(){
        return this.user.type === 'advertiser'
    }

}