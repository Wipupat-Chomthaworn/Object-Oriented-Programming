public class CarThread extends Thread {
    // The car to move

    private Car car;

    // Creates a new thread for the specified car
    public CarThread(Car car) {
        this.car = car;
    }

    @Override
    public void run() {
        // Keep moving the car until the thread is interrupted
        while (!isInterrupted()) {
            car.move();

            // Sleep for a short time before updating the car's position again
            try {
                Thread.sleep(10);
            } catch (InterruptedException e) {
                // Stop the thread if it is interrupted
                return;
            }
        }
    }
}