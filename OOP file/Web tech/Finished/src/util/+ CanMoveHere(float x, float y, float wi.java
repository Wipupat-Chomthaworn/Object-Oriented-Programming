+ CanMoveHere(float x, float y, float width, float height, int[][] lvlData)                                                               :boolean
+ IsSolid(float x, float y, int[][] lvlData)                                                                                                                    :boolean
+ IsTileSolid(int xTile, int yTile, int[][] lvlData)                                                                                                         :boolean
+ GetEntityXPosNextToWall(Rectangle2D.Float hitbox, float xSpeed)                                                                  :float
+ GetEntityYPosUnderRoofOrAboveFloor(Rectangle2D.Float hitbox, float airSpeed)                                         :float
+ IsEntityOnFloor(Rectangle2D.Float hitbox, int[][] lvlData)                                                                                   :boolean
+ IsFloor(Rectangle2D.Float hitbox, float xSpeed, int[][] lvlData)                                                                          :boolean
+ IsAllTilesWalkable(int xStart, int xEnd, int y, int[][] lvlData)                                                                                 :boolean
+ IsSightClear(int[][] lvlData, Rectangle2D.Float firstHitbox, Rectangle2D.Float secondHitbox, int yTile)          :boolean
+ GetLevelData(BufferedImage img)                                                                                                                        :int[][] 
+ GetCrabs(BufferedImage img)                                                                                                              :ArrayList<Crabby>
+ GetPlayerSpawn(BufferedImage img)                                                                                                                    :Point 

